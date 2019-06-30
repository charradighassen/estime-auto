"use strict";

/**
 * Copyright Marc J. Schmidt. See the LICENSE file at the top-level
 * directory of this distribution and at
 * https://github.com/marcj/css-element-queries/blob/master/LICENSE.
 */
(function(root, factory) {
  if (typeof define === "function" && define.amd) {
    define(factory);
  } else if (typeof exports === "object") {
    module.exports = factory();
  } else {
    root.ResizeSensor = factory();
  }
})(typeof window !== "undefined" ? window : this, function() {
  // Make sure it does not throw in a SSR (Server Side Rendering) situation
  if (typeof window === "undefined") {
    return null;
  }
  // Only used for the dirty checking, so the event callback count is limited to max 1 call per fps per sensor.
  // In combination with the event based resize sensor this saves cpu time, because the sensor is too fast and
  // would generate too many unnecessary events.
  var requestAnimationFrame =
    window.requestAnimationFrame ||
    window.mozRequestAnimationFrame ||
    window.webkitRequestAnimationFrame ||
    function(fn) {
      return window.setTimeout(fn, 20);
    };

  /**
   * Iterate over each of the provided element(s).
   *
   * @param {HTMLElement|HTMLElement[]} elements
   * @param {Function}                  callback
   */
  function forEachElement(elements, callback) {
    var elementsType = Object.prototype.toString.call(elements);
    var isCollectionTyped =
      "[object Array]" === elementsType ||
      "[object NodeList]" === elementsType ||
      "[object HTMLCollection]" === elementsType ||
      "[object Object]" === elementsType ||
      ("undefined" !== typeof jQuery && elements instanceof jQuery) || //jquery
      ("undefined" !== typeof Elements && elements instanceof Elements); //mootools
    var i = 0,
      j = elements.length;
    if (isCollectionTyped) {
      for (; i < j; i++) {
        callback(elements[i]);
      }
    } else {
      callback(elements);
    }
  }

  /**
   * Get element size
   * @param {HTMLElement} element
   * @returns {Object} {width, height}
   */
  function getElementSize(element) {
    if (!element.getBoundingClientRect) {
      return {
        width: element.offsetWidth,
        height: element.offsetHeight
      };
    }

    var rect = element.getBoundingClientRect();
    return {
      width: Math.round(rect.width),
      height: Math.round(rect.height)
    };
  }

  /**
   * Class for dimension change detection.
   *
   * @param {Element|Element[]|Elements|jQuery} element
   * @param {Function} callback
   *
   * @constructor
   */
  var ResizeSensor = function(element, callback) {
    var observer;

    /**
     *
     * @constructor
     */
    function EventQueue() {
      var q = [];
      this.add = function(ev) {
        q.push(ev);
      };

      var i, j;
      this.call = function(sizeInfo) {
        for (i = 0, j = q.length; i < j; i++) {
          q[i].call(this, sizeInfo);
        }
      };

      this.remove = function(ev) {
        var newQueue = [];
        for (i = 0, j = q.length; i < j; i++) {
          if (q[i] !== ev) newQueue.push(q[i]);
        }
        q = newQueue;
      };

      this.length = function() {
        return q.length;
      };
    }

    /**
     *
     * @param {HTMLElement} element
     * @param {Function}    resized
     */
    function attachResizeEvent(element, resized) {
      if (!element) return;
      if (element.resizedAttached) {
        element.resizedAttached.add(resized);
        return;
      }

      element.resizedAttached = new EventQueue();
      element.resizedAttached.add(resized);

      element.resizeSensor = document.createElement("div");
      element.resizeSensor.dir = "ltr";
      element.resizeSensor.className = "resize-sensor";
      var style =
        "position: absolute; left: -10px; top: -10px; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden; max-width: 100%";
      var styleChild = "position: absolute; left: 0; top: 0; transition: 0s;";

      element.resizeSensor.style.cssText = style;
      element.resizeSensor.innerHTML =
        '<div class="resize-sensor-expand" style="' +
        style +
        '">' +
        '<div style="' +
        styleChild +
        '"></div>' +
        "</div>" +
        '<div class="resize-sensor-shrink" style="' +
        style +
        '">' +
        '<div style="' +
        styleChild +
        ' width: 200%; height: 200%"></div>' +
        "</div>";
      element.appendChild(element.resizeSensor);

      var computedStyle = window.getComputedStyle(element);
      var position = computedStyle
        ? computedStyle.getPropertyValue("position")
        : null;
      if (
        "absolute" !== position &&
        "relative" !== position &&
        "fixed" !== position
      ) {
        element.style.position = "relative";
      }

      var expand = element.resizeSensor.childNodes[0];
      var expandChild = expand.childNodes[0];
      var shrink = element.resizeSensor.childNodes[1];

      var dirty, rafId;
      var size = getElementSize(element);
      var lastWidth = size.width;
      var lastHeight = size.height;
      var initialHiddenCheck = true,
        resetRAF_id;

      var resetExpandShrink = function() {
        expandChild.style.width = "100000px";
        expandChild.style.height = "100000px";

        expand.scrollLeft = 100000;
        expand.scrollTop = 100000;

        shrink.scrollLeft = 100000;
        shrink.scrollTop = 100000;
      };

      var reset = function() {
        // Check if element is hidden
        if (initialHiddenCheck) {
          if (!expand.scrollTop && !expand.scrollLeft) {
            // reset
            resetExpandShrink();

            // Check in next frame
            if (!resetRAF_id) {
              resetRAF_id = requestAnimationFrame(function() {
                resetRAF_id = 0;

                reset();
              });
            }

            return;
          } else {
            // Stop checking
            initialHiddenCheck = false;
          }
        }

        resetExpandShrink();
      };
      element.resizeSensor.resetSensor = reset;

      var onResized = function() {
        rafId = 0;

        if (!dirty) return;

        lastWidth = size.width;
        lastHeight = size.height;

        if (element.resizedAttached) {
          element.resizedAttached.call(size);
        }
      };

      var onScroll = function() {
        size = getElementSize(element);
        dirty = size.width !== lastWidth || size.height !== lastHeight;

        if (dirty && !rafId) {
          rafId = requestAnimationFrame(onResized);
        }

        reset();
      };

      var addEvent = function(el, name, cb) {
        if (el.attachEvent) {
          el.attachEvent("on" + name, cb);
        } else {
          el.addEventListener(name, cb);
        }
      };

      addEvent(expand, "scroll", onScroll);
      addEvent(shrink, "scroll", onScroll);

      // Fix for custom Elements
      requestAnimationFrame(reset);
    }

    if (typeof ResizeObserver !== "undefined") {
      observer = new ResizeObserver(function(element) {
        forEachElement(element, function(elem) {
          callback.call(this, {
            width: elem.contentRect.width,
            height: elem.contentRect.height
          });
        });
      });
      if (element !== undefined) {
        forEachElement(element, function(elem) {
          observer.observe(elem);
        });
      }
    } else {
      forEachElement(element, function(elem) {
        attachResizeEvent(elem, callback);
      });
    }

    this.detach = function(ev) {
      if (typeof ResizeObserver != "undefined") {
        forEachElement(element, function(elem) {
          observer.unobserve(elem);
        });
      } else {
        ResizeSensor.detach(element, ev);
      }
    };

    this.reset = function() {
      element.resizeSensor.resetSensor();
    };
  };

  ResizeSensor.reset = function(element, ev) {
    forEachElement(element, function(elem) {
      elem.resizeSensor.resetSensor();
    });
  };

  ResizeSensor.detach = function(element, ev) {
    forEachElement(element, function(elem) {
      if (!elem) return;
      if (elem.resizedAttached && typeof ev === "function") {
        elem.resizedAttached.remove(ev);
        if (elem.resizedAttached.length()) return;
      }
      if (elem.resizeSensor) {
        if (elem.contains(elem.resizeSensor)) {
          elem.removeChild(elem.resizeSensor);
        }
        delete elem.resizeSensor;
        delete elem.resizedAttached;
      }
    });
  };

  return ResizeSensor;
});

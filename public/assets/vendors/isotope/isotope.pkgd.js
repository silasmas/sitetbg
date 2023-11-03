/**
 * @param {string} str
 * @param {number} step
 * @return {?}
 */
function chunkData(str, step) {
  /** @type {Array} */
  var colNames = [];
  var len = str.length;
  (function(root, factory) {
    if (typeof define == "function" && define.amd) {
      define("jquery-bridget/jquery-bridget", ["jquery"], function(deepDataAndEvents) {
        return factory(root, deepDataAndEvents);
      });
    } else {
      if (typeof module == "object" && module.exports) {
        module.exports = factory(root, require("jquery"));
      } else {
        root.jQueryBridget = factory(root, root.jQuery);
      }
    }
  })(window, function init(global, deepDataAndEvents) {
    /**
     * @param {string} key
     * @param {Function} self
     * @param {Object} $
     * @return {undefined}
     */
    function callback(key, self, $) {
      /**
       * @param {string} l
       * @param {string} index
       * @param {Array} data
       * @return {?}
       */
      function setup(l, index, data) {
        var result;
        /** @type {string} */
        var id = "$()." + key + '("' + index + '")';
        l.each(function(dataAndEvents, elem) {
          var cur = $.data(elem, key);
          if (!cur) {
            log(key + " not initialized. Cannot call methods, i.e. " + id);
            return;
          }
          var handle = cur[index];
          if (!handle || index.charAt(0) == "_") {
            log(id + " is not a valid method");
            return;
          }
          var message = handle.apply(cur, data);
          result = result === undefined ? message : result;
        });
        return result !== undefined ? result : l;
      }
      /**
       * @param {?} root
       * @param {number} options
       * @return {undefined}
       */
      function _init(root, options) {
        root.each(function(dataAndEvents, elem) {
          var data = $.data(elem, key);
          if (data) {
            data.option(options);
            data._init();
          } else {
            data = new self(elem, options);
            $.data(elem, key, data);
          }
        });
      }
      $ = $ || (deepDataAndEvents || global.jQuery);
      if (!$) {
        return;
      }
      if (!self.prototype.option) {
        /**
         * @param {number} options
         * @return {undefined}
         */
        self.prototype.option = function(options) {
          if (!$.isPlainObject(options)) {
            return;
          }
          this.options = $.extend(true, this.options, options);
        };
      }
      /**
       * @param {(number|string)} options
       * @return {?}
       */
      $.fn[key] = function(options) {
        if (typeof options == "string") {
          /** @type {Array.<?>} */
          var msgs = __slice.call(arguments, 1);
          return setup(this, options, msgs);
        }
        _init(this, options);
        return this;
      };
      bind($);
    }
    /**
     * @param {Object} $
     * @return {undefined}
     */
    function bind($) {
      if (!$ || $ && $.bridget) {
        return;
      }
      /** @type {function (string, Function, Object): undefined} */
      $.bridget = callback;
    }
    /** @type {function (this:(Array.<T>|string|{length: number}), *=, *=): Array.<T>} */
    var __slice = Array.prototype.slice;
    var console = global.console;
    /** @type {Function} */
    var log = typeof console == "undefined" ? function() {
    } : function(fmt) {
      console.error(fmt);
    };
    bind(deepDataAndEvents || global.jQuery);
    return callback;
  });
  (function(root, factory) {
    if (typeof define == "function" && define.amd) {
      define("ev-emitter/ev-emitter", factory);
    } else {
      if (typeof module == "object" && module.exports) {
        module.exports = factory();
      } else {
        root.EvEmitter = factory();
      }
    }
  })(typeof window != "undefined" ? window : this, function() {
    /**
     * @return {undefined}
     */
    function ctor() {
    }
    var proto = ctor.prototype;
    /**
     * @param {string} type
     * @param {Function} listener
     * @return {?}
     */
    proto.on = function(type, listener) {
      if (!type || !listener) {
        return;
      }
      var events = this._events = this._events || {};
      var xs = events[type] = events[type] || [];
      if (xs.indexOf(listener) == -1) {
        xs.push(listener);
      }
      return this;
    };
    /**
     * @param {string} type
     * @param {Function} listener
     * @return {?}
     */
    proto.once = function(type, listener) {
      if (!type || !listener) {
        return;
      }
      this.on(type, listener);
      var special = this._onceEvents = this._onceEvents || {};
      var _parent = special[type] = special[type] || {};
      /** @type {boolean} */
      _parent[listener] = true;
      return this;
    };
    /**
     * @param {string} type
     * @param {?} fn
     * @return {?}
     */
    proto.off = function(type, fn) {
      var events = this._events && this._events[type];
      if (!events || !events.length) {
        return;
      }
      var index = events.indexOf(fn);
      if (index != -1) {
        events.splice(index, 1);
      }
      return this;
    };
    /**
     * @param {string} type
     * @param {Array} args
     * @return {?}
     */
    proto.emitEvent = function(type, args) {
      var events = this._events && this._events[type];
      if (!events || !events.length) {
        return;
      }
      /** @type {number} */
      var index = 0;
      var fn = events[index];
      args = args || [];
      var cb = this._onceEvents && this._onceEvents[type];
      for (;fn;) {
        var forward = cb && cb[fn];
        if (forward) {
          this.off(type, fn);
          delete cb[fn];
        }
        fn.apply(this, args);
        index += forward ? 0 : 1;
        fn = events[index];
      }
      return this;
    };
    return ctor;
  });
  (function(exports, require) {
    if (typeof define == "function" && define.amd) {
      define("get-size/get-size", [], function() {
        return require();
      });
    } else {
      if (typeof module == "object" && module.exports) {
        module.exports = require();
      } else {
        exports.getSize = require();
      }
    }
  })(window, function setInitialStyles() {
    /**
     * @param {string} value
     * @return {?}
     */
    function getStyleSize(value) {
      /** @type {number} */
      var d = parseFloat(value);
      /** @type {boolean} */
      var k = value.indexOf("%") == -1 && !isNaN(d);
      return k && d;
    }
    /**
     * @return {undefined}
     */
    function e() {
    }
    /**
     * @return {?}
     */
    function getZeroSize() {
      var size = {
        width : 0,
        height : 0,
        innerWidth : 0,
        innerHeight : 0,
        outerWidth : 0,
        outerHeight : 0
      };
      /** @type {number} */
      var i = 0;
      for (;i < padLength;i++) {
        var measurement = measurements[i];
        /** @type {number} */
        size[measurement] = 0;
      }
      return size;
    }
    /**
     * @param {Element} elem
     * @return {?}
     */
    function getStyle(elem) {
      var style = getComputedStyle(elem);
      if (!style) {
        subject("Style returned " + style + ". Are you running this code in a hidden iframe on Firefox? " + "See http://bit.ly/getsizebug1");
      }
      return style;
    }
    /**
     * @return {undefined}
     */
    function init() {
      if (n) {
        return;
      }
      /** @type {boolean} */
      n = true;
      /** @type {Element} */
      var el = document.createElement("div");
      /** @type {string} */
      el.style.width = "200px";
      /** @type {string} */
      el.style.padding = "1px 2px 3px 4px";
      /** @type {string} */
      el.style.borderStyle = "solid";
      /** @type {string} */
      el.style.borderWidth = "1px 2px 3px 4px";
      /** @type {string} */
      el.style.boxSizing = "border-box";
      /** @type {Element} */
      var head = document.body || document.documentElement;
      head.appendChild(el);
      var style = getStyle(el);
      /** @type {boolean} */
      getSize.isBoxSizeOuter = isBoxSizeOuter = getStyleSize(style.width) == 200;
      head.removeChild(el);
    }
    /**
     * @param {Element} elem
     * @return {?}
     */
    function getSize(elem) {
      init();
      if (typeof elem == "string") {
        /** @type {(Element|null)} */
        elem = document.querySelector(elem);
      }
      if (!elem || (typeof elem != "object" || !elem.nodeType)) {
        return;
      }
      var style = getStyle(elem);
      if (style.display == "none") {
        return getZeroSize();
      }
      var size = {};
      size.width = elem.offsetWidth;
      size.height = elem.offsetHeight;
      /** @type {boolean} */
      var isBorderBox = size.isBorderBox = style.boxSizing == "border-box";
      /** @type {number} */
      var i = 0;
      for (;i < padLength;i++) {
        var measurement = measurements[i];
        var value = style[measurement];
        /** @type {number} */
        var num = parseFloat(value);
        /** @type {number} */
        size[measurement] = !isNaN(num) ? num : 0;
      }
      var paddingWidth = size.paddingLeft + size.paddingRight;
      var paddingHeight = size.paddingTop + size.paddingBottom;
      var marginWidth = size.marginLeft + size.marginRight;
      var marginHeight = size.marginTop + size.marginBottom;
      var borderWidth = size.borderLeftWidth + size.borderRightWidth;
      var borderHeight = size.borderTopWidth + size.borderBottomWidth;
      var isBorderBoxSizeOuter = isBorderBox && isBoxSizeOuter;
      var styleWidth = getStyleSize(style.width);
      if (styleWidth !== false) {
        size.width = styleWidth + (isBorderBoxSizeOuter ? 0 : paddingWidth + borderWidth);
      }
      var styleHeight = getStyleSize(style.height);
      if (styleHeight !== false) {
        size.height = styleHeight + (isBorderBoxSizeOuter ? 0 : paddingHeight + borderHeight);
      }
      /** @type {number} */
      size.innerWidth = size.width - (paddingWidth + borderWidth);
      /** @type {number} */
      size.innerHeight = size.height - (paddingHeight + borderHeight);
      size.outerWidth = size.width + marginWidth;
      size.outerHeight = size.height + marginHeight;
      return size;
    }
    /** @type {Function} */
    var subject = typeof console == "undefined" ? e : function(fmt) {
      console.error(fmt);
    };
    /** @type {Array} */
    var measurements = ["paddingLeft", "paddingRight", "paddingTop", "paddingBottom", "marginLeft", "marginRight", "marginTop", "marginBottom", "borderLeftWidth", "borderRightWidth", "borderTopWidth", "borderBottomWidth"];
    /** @type {number} */
    var padLength = measurements.length;
    /** @type {boolean} */
    var n = false;
    var isBoxSizeOuter;
    return getSize;
  });
  (function(root, factory) {
    if (typeof define == "function" && define.amd) {
      define("desandro-matches-selector/matches-selector", factory);
    } else {
      if (typeof module == "object" && module.exports) {
        module.exports = factory();
      } else {
        root.matchesSelector = factory();
      }
    }
  })(window, function initRequestAnimationFrame() {
    var unlock = function() {
      var proto = Element.prototype;
      if (proto.matches) {
        return "matches";
      }
      if (proto.matchesSelector) {
        return "matchesSelector";
      }
      /** @type {Array} */
      var prefixes = ["webkit", "moz", "ms", "o"];
      /** @type {number} */
      var i = 0;
      for (;i < prefixes.length;i++) {
        var prefix = prefixes[i];
        /** @type {string} */
        var method = prefix + "MatchesSelector";
        if (proto[method]) {
          return method;
        }
      }
    }();
    return function clone(dataAndEvents, deepDataAndEvents) {
      return dataAndEvents[unlock](deepDataAndEvents);
    };
  });
  (function(root, factory) {
    if (typeof define == "function" && define.amd) {
      define("fizzy-ui-utils/utils", ["desandro-matches-selector/matches-selector"], function(jQuery) {
        return factory(root, jQuery);
      });
    } else {
      if (typeof module == "object" && module.exports) {
        module.exports = factory(root, require("desandro-matches-selector"));
      } else {
        root.fizzyUIUtils = factory(root, root.matchesSelector);
      }
    }
  })(window, function init(global, $) {
    var self = {};
    /**
     * @param {?} a
     * @param {?} b
     * @return {?}
     */
    self.extend = function(a, b) {
      var prop;
      for (prop in b) {
        a[prop] = b[prop];
      }
      return a;
    };
    /**
     * @param {number} a
     * @param {number} b
     * @return {?}
     */
    self.modulo = function(a, b) {
      return(a % b + b) % b;
    };
    /** @type {function (this:(Array.<T>|string|{length: number}), *=, *=): Array.<T>} */
    var slice = Array.prototype.slice;
    /**
     * @param {Object} array
     * @return {?}
     */
    self.makeArray = function(array) {
      if (Array.isArray(array)) {
        return array;
      }
      if (array === null || array === undefined) {
        return[];
      }
      /** @type {boolean} */
      var e = typeof array == "object" && typeof array.length == "number";
      if (e) {
        return slice.call(array);
      }
      return[array];
    };
    /**
     * @param {Array} ary
     * @param {?} obj
     * @return {undefined}
     */
    self.removeFrom = function(ary, obj) {
      var str = ary.indexOf(obj);
      if (str != -1) {
        ary.splice(str, 1);
      }
    };
    /**
     * @param {?} target
     * @param {?} $this
     * @return {?}
     */
    self.getParent = function(target, $this) {
      for (;target.parentNode && target != document.body;) {
        target = target.parentNode;
        if ($(target, $this)) {
          return target;
        }
      }
    };
    /**
     * @param {Element} elem
     * @return {?}
     */
    self.getQueryElement = function(elem) {
      if (typeof elem == "string") {
        return document.querySelector(elem);
      }
      return elem;
    };
    /**
     * @param {Event} event
     * @return {undefined}
     */
    self.handleEvent = function(event) {
      /** @type {string} */
      var method = "on" + event.type;
      if (this[method]) {
        this[method](event);
      }
    };
    /**
     * @param {Object} array
     * @param {?} selector
     * @param {?} dataAndEvents
     * @return {?}
     */
    self.filterFindElements = function(array, selector, dataAndEvents) {
      array = self.makeArray(array);
      /** @type {Array} */
      var ret = [];
      array.forEach(function(element) {
        if (!dataAndEvents && !(element instanceof HTMLElement)) {
          return;
        }
        if (!selector) {
          ret.push(element);
          return;
        }
        if ($(element, selector)) {
          ret.push(element);
        }
        var elems = element.querySelectorAll(selector);
        /** @type {number} */
        var i = 0;
        for (;i < elems.length;i++) {
          ret.push(elems[i]);
        }
      });
      return ret;
    };
    /**
     * @param {Function} frame
     * @param {string} name
     * @param {number} timeout
     * @return {undefined}
     */
    self.debounceMethod = function(frame, name, timeout) {
      timeout = timeout || 100;
      var old = frame.prototype[name];
      /** @type {string} */
      var key = name + "Timeout";
      /**
       * @return {undefined}
       */
      frame.prototype[name] = function() {
        var to = this[key];
        clearTimeout(to);
        /** @type {Arguments} */
        var args = arguments;
        var self = this;
        /** @type {number} */
        this[key] = setTimeout(function() {
          old.apply(self, args);
          delete self[key];
        }, timeout);
      };
    };
    /**
     * @param {Function} func
     * @return {undefined}
     */
    self.docReady = function(func) {
      /** @type {string} */
      var readyState = document.readyState;
      if (readyState == "complete" || readyState == "interactive") {
        setTimeout(func);
      } else {
        document.addEventListener("DOMContentLoaded", func);
      }
    };
    /**
     * @param {string} string
     * @return {?}
     */
    self.toDashed = function(string) {
      return string.replace(/(.)([A-Z])/g, function(dataAndEvents, $1, $2) {
        return $1 + "-" + $2;
      }).toLowerCase();
    };
    var console = global.console;
    /**
     * @param {Function} fun
     * @param {string} type
     * @return {undefined}
     */
    self.htmlInit = function(fun, type) {
      self.docReady(function() {
        var name = self.toDashed(type);
        /** @type {string} */
        var attr = "data-" + name;
        /** @type {NodeList} */
        var value = document.querySelectorAll("[" + attr + "]");
        /** @type {NodeList} */
        var data = document.querySelectorAll(".js-" + name);
        var asserterNames = self.makeArray(value).concat(self.makeArray(data));
        /** @type {string} */
        var dataAttr = attr + "-options";
        var jQuery = global.jQuery;
        asserterNames.forEach(function(elem) {
          var src = elem.getAttribute(attr) || elem.getAttribute(dataAttr);
          var m;
          try {
            /** @type {*} */
            m = src && JSON.parse(src);
          } catch (msgType) {
            if (console) {
              console.error("Error parsing " + attr + " on " + elem.className + ": " + msgType);
            }
            return;
          }
          var closer = new fun(elem, m);
          if (jQuery) {
            jQuery.data(elem, type, closer);
          }
        });
      });
    };
    return self;
  });
  (function(root, factory) {
    if (typeof define == "function" && define.amd) {
      define("outlayer/item", ["ev-emitter/ev-emitter", "get-size/get-size"], factory);
    } else {
      if (typeof module == "object" && module.exports) {
        module.exports = factory(require("ev-emitter"), require("get-size"));
      } else {
        root.Outlayer = {};
        root.Outlayer.Item = factory(root.EvEmitter, root.getSize);
      }
    }
  })(window, function outlayerItemDefinition(EventEmitter, getSize) {
    /**
     * @param {?} obj
     * @return {?}
     */
    function isEmptyObj(obj) {
      var prop;
      for (prop in obj) {
        return false;
      }
      /** @type {null} */
      prop = null;
      return true;
    }
    /**
     * @param {?} element
     * @param {Function} layout
     * @return {undefined}
     */
    function Item(element, layout) {
      if (!element) {
        return;
      }
      this.element = element;
      /** @type {Function} */
      this.layout = layout;
      this.position = {
        x : 0,
        y : 0
      };
      this._create();
    }
    /**
     * @param {string} str
     * @return {?}
     */
    function toDash(str) {
      return str.replace(/([A-Z])/g, function(m3) {
        return "-" + m3.toLowerCase();
      });
    }
    /** @type {(CSSStyleDeclaration|null)} */
    var s = document.documentElement.style;
    /** @type {string} */
    var TRANSITION = typeof s.transition == "string" ? "transition" : "WebkitTransition";
    /** @type {string} */
    var transformProperty = typeof s.transform == "string" ? "transform" : "WebkitTransform";
    var gesture = {
      WebkitTransition : "webkitTransitionEnd",
      transition : "transitionend"
    }[TRANSITION];
    var vendorProperties = {
      transform : transformProperty,
      transition : TRANSITION,
      transitionDuration : TRANSITION + "Duration",
      transitionProperty : TRANSITION + "Property",
      transitionDelay : TRANSITION + "Delay"
    };
    /** @type {Object} */
    var that = Item.prototype = Object.create(EventEmitter.prototype);
    /** @type {function (?, Function): undefined} */
    that.constructor = Item;
    /**
     * @return {undefined}
     */
    that._create = function() {
      this._transn = {
        ingProperties : {},
        clean : {},
        onEnd : {}
      };
      this.css({
        position : "absolute"
      });
    };
    /**
     * @param {Event} event
     * @return {undefined}
     */
    that.handleEvent = function(event) {
      /** @type {string} */
      var method = "on" + event.type;
      if (this[method]) {
        this[method](event);
      }
    };
    /**
     * @return {undefined}
     */
    that.getSize = function() {
      this.size = getSize(this.element);
    };
    /**
     * @param {?} opt_attributes
     * @return {undefined}
     */
    that.css = function(opt_attributes) {
      var elemStyle = this.element.style;
      var prop;
      for (prop in opt_attributes) {
        var supportedProp = vendorProperties[prop] || prop;
        elemStyle[supportedProp] = opt_attributes[prop];
      }
    };
    /**
     * @return {undefined}
     */
    that.getPosition = function() {
      var style = getComputedStyle(this.element);
      var isOriginLeft = this.layout._getOption("originLeft");
      var isOriginTop = this.layout._getOption("originTop");
      var cDigit = style[isOriginLeft ? "left" : "right"];
      var str = style[isOriginTop ? "top" : "bottom"];
      var layoutSize = this.layout.size;
      /** @type {number} */
      var x = cDigit.indexOf("%") != -1 ? parseFloat(cDigit) / 100 * layoutSize.width : parseInt(cDigit, 10);
      /** @type {number} */
      var y = str.indexOf("%") != -1 ? parseFloat(str) / 100 * layoutSize.height : parseInt(str, 10);
      /** @type {number} */
      x = isNaN(x) ? 0 : x;
      /** @type {number} */
      y = isNaN(y) ? 0 : y;
      x -= isOriginLeft ? layoutSize.paddingLeft : layoutSize.paddingRight;
      y -= isOriginTop ? layoutSize.paddingTop : layoutSize.paddingBottom;
      /** @type {number} */
      this.position.x = x;
      /** @type {number} */
      this.position.y = y;
    };
    /**
     * @return {undefined}
     */
    that.layoutPosition = function() {
      var disp = this.layout.size;
      var attributes = {};
      var isVertical = this.layout._getOption("originLeft");
      var inverted = this.layout._getOption("originTop");
      /** @type {string} */
      var padding = isVertical ? "paddingLeft" : "paddingRight";
      /** @type {string} */
      var name = isVertical ? "left" : "right";
      /** @type {string} */
      var prop = isVertical ? "right" : "left";
      var deep = this.position.x + disp[padding];
      attributes[name] = this.getXValue(deep);
      /** @type {string} */
      attributes[prop] = "";
      /** @type {string} */
      var j = inverted ? "paddingTop" : "paddingBottom";
      /** @type {string} */
      var horzEdge = inverted ? "top" : "bottom";
      /** @type {string} */
      var property = inverted ? "bottom" : "top";
      var udataCur = this.position.y + disp[j];
      attributes[horzEdge] = this.getYValue(udataCur);
      /** @type {string} */
      attributes[property] = "";
      this.css(attributes);
      this.emitEvent("layout", [this]);
    };
    /**
     * @param {number} width
     * @return {?}
     */
    that.getXValue = function(width) {
      var srcHhorizontal = this.layout._getOption("horizontal");
      return this.layout.options.percentPosition && !srcHhorizontal ? width / this.layout.size.width * 100 + "%" : width + "px";
    };
    /**
     * @param {number} value
     * @return {?}
     */
    that.getYValue = function(value) {
      var srcHhorizontal = this.layout._getOption("horizontal");
      return this.layout.options.percentPosition && srcHhorizontal ? value / this.layout.size.height * 100 + "%" : value + "px";
    };
    /**
     * @param {?} x
     * @param {?} y
     * @return {undefined}
     */
    that._transitionTo = function(x, y) {
      this.getPosition();
      var startX = this.position.x;
      var startY = this.position.y;
      /** @type {number} */
      var compareX = parseInt(x, 10);
      /** @type {number} */
      var compareY = parseInt(y, 10);
      /** @type {boolean} */
      var didNotMove = compareX === this.position.x && compareY === this.position.y;
      this.setPosition(x, y);
      if (didNotMove && !this.isTransitioning) {
        this.layoutPosition();
        return;
      }
      /** @type {number} */
      var failuresLink = x - startX;
      /** @type {number} */
      var diffY = y - startY;
      var to = {};
      to.transform = this.getTranslate(failuresLink, diffY);
      this.transition({
        to : to,
        onTransitionEnd : {
          transform : this.layoutPosition
        },
        isCleaning : true
      });
    };
    /**
     * @param {number} el
     * @param {number} part
     * @return {?}
     */
    that.getTranslate = function(el, part) {
      var i = this.layout._getOption("originLeft");
      var isXML = this.layout._getOption("originTop");
      el = i ? el : -el;
      part = isXML ? part : -part;
      return "translate3d(" + el + "px, " + part + "px, 0)";
    };
    /**
     * @param {?} x
     * @param {?} y
     * @return {undefined}
     */
    that.goTo = function(x, y) {
      this.setPosition(x, y);
      this.layoutPosition();
    };
    /** @type {function (?, ?): undefined} */
    that.moveTo = that._transitionTo;
    /**
     * @param {?} x
     * @param {?} y
     * @return {undefined}
     */
    that.setPosition = function(x, y) {
      /** @type {number} */
      this.position.x = parseInt(x, 10);
      /** @type {number} */
      this.position.y = parseInt(y, 10);
    };
    /**
     * @param {Object} args
     * @return {undefined}
     */
    that._nonTransition = function(args) {
      this.css(args.to);
      if (args.isCleaning) {
        this._removeStyles(args.to);
      }
      var prop;
      for (prop in args.onTransitionEnd) {
        args.onTransitionEnd[prop].call(this);
      }
    };
    /**
     * @param {Object} args
     * @return {undefined}
     */
    that.transition = function(args) {
      if (!parseFloat(this.layout.options.transitionDuration)) {
        this._nonTransition(args);
        return;
      }
      var _transition = this._transn;
      var prop;
      for (prop in args.onTransitionEnd) {
        _transition.onEnd[prop] = args.onTransitionEnd[prop];
      }
      for (prop in args.to) {
        /** @type {boolean} */
        _transition.ingProperties[prop] = true;
        if (args.isCleaning) {
          /** @type {boolean} */
          _transition.clean[prop] = true;
        }
      }
      if (args.from) {
        this.css(args.from);
        var h = this.element.offsetHeight;
        /** @type {null} */
        h = null;
      }
      this.enableTransition(args.to);
      this.css(args.to);
      /** @type {boolean} */
      this.isTransitioning = true;
    };
    /** @type {string} */
    var itemTransitionProperties = "opacity," + toDash(transformProperty);
    /**
     * @return {undefined}
     */
    that.enableTransition = function() {
      if (this.isTransitioning) {
        return;
      }
      var duration = this.layout.options.transitionDuration;
      duration = typeof duration == "number" ? duration + "ms" : duration;
      this.css({
        transitionProperty : itemTransitionProperties,
        transitionDuration : duration,
        transitionDelay : this.staggerDelay || 0
      });
      this.element.addEventListener(gesture, this, false);
    };
    /**
     * @param {Object} event
     * @return {undefined}
     */
    that.onwebkitTransitionEnd = function(event) {
      this.ontransitionend(event);
    };
    /**
     * @param {Object} event
     * @return {undefined}
     */
    that.onotransitionend = function(event) {
      this.ontransitionend(event);
    };
    var dashedVendorProperties = {
      "-webkit-transform" : "transform"
    };
    /**
     * @param {Object} event
     * @return {undefined}
     */
    that.ontransitionend = function(event) {
      if (event.target !== this.element) {
        return;
      }
      var _transition = this._transn;
      var propertyName = dashedVendorProperties[event.propertyName] || event.propertyName;
      delete _transition.ingProperties[propertyName];
      if (isEmptyObj(_transition.ingProperties)) {
        this.disableTransition();
      }
      if (propertyName in _transition.clean) {
        /** @type {string} */
        this.element.style[event.propertyName] = "";
        delete _transition.clean[propertyName];
      }
      if (propertyName in _transition.onEnd) {
        var callback = _transition.onEnd[propertyName];
        callback.call(this);
        delete _transition.onEnd[propertyName];
      }
      this.emitEvent("transitionEnd", [this]);
    };
    /**
     * @return {undefined}
     */
    that.disableTransition = function() {
      this.removeTransitionStyles();
      this.element.removeEventListener(gesture, this, false);
      /** @type {boolean} */
      this.isTransitioning = false;
    };
    /**
     * @param {?} style
     * @return {undefined}
     */
    that._removeStyles = function(style) {
      var cleanStyle = {};
      var prop;
      for (prop in style) {
        /** @type {string} */
        cleanStyle[prop] = "";
      }
      this.css(cleanStyle);
    };
    var css = {
      transitionProperty : "",
      transitionDuration : "",
      transitionDelay : ""
    };
    /**
     * @return {undefined}
     */
    that.removeTransitionStyles = function() {
      this.css(css);
    };
    /**
     * @param {number} time
     * @return {undefined}
     */
    that.stagger = function(time) {
      time = isNaN(time) ? 0 : time;
      /** @type {string} */
      this.staggerDelay = time + "ms";
    };
    /**
     * @return {undefined}
     */
    that.removeElem = function() {
      this.element.parentNode.removeChild(this.element);
      this.css({
        display : ""
      });
      this.emitEvent("remove", [this]);
    };
    /**
     * @return {undefined}
     */
    that.remove = function() {
      if (!TRANSITION || !parseFloat(this.layout.options.transitionDuration)) {
        this.removeElem();
        return;
      }
      this.once("transitionEnd", function() {
        this.removeElem();
      });
      this.hide();
    };
    /**
     * @return {undefined}
     */
    that.reveal = function() {
      delete this.isHidden;
      this.css({
        display : ""
      });
      var options = this.layout.options;
      var map = {};
      var objUid = this.getHideRevealTransitionEndProperty("visibleStyle");
      map[objUid] = this.onRevealTransitionEnd;
      this.transition({
        from : options.hiddenStyle,
        to : options.visibleStyle,
        isCleaning : true,
        onTransitionEnd : map
      });
    };
    /**
     * @return {undefined}
     */
    that.onRevealTransitionEnd = function() {
      if (!this.isHidden) {
        this.emitEvent("reveal");
      }
    };
    /**
     * @param {string} i
     * @return {?}
     */
    that.getHideRevealTransitionEndProperty = function(i) {
      var b = this.layout.options[i];
      if (b.opacity) {
        return "opacity";
      }
      var prop;
      for (prop in b) {
        return prop;
      }
    };
    /**
     * @return {undefined}
     */
    that.hide = function() {
      /** @type {boolean} */
      this.isHidden = true;
      this.css({
        display : ""
      });
      var options = this.layout.options;
      var map = {};
      var objUid = this.getHideRevealTransitionEndProperty("hiddenStyle");
      map[objUid] = this.onHideTransitionEnd;
      this.transition({
        from : options.visibleStyle,
        to : options.hiddenStyle,
        isCleaning : true,
        onTransitionEnd : map
      });
    };
    /**
     * @return {undefined}
     */
    that.onHideTransitionEnd = function() {
      if (this.isHidden) {
        this.css({
          display : "none"
        });
        this.emitEvent("hide");
      }
    };
    /**
     * @return {undefined}
     */
    that.destroy = function() {
      this.css({
        position : "",
        left : "",
        right : "",
        top : "",
        bottom : "",
        transition : "",
        transform : ""
      });
    };
    return Item;
  });
  (function(root, factory) {
    if (typeof define == "function" && define.amd) {
      define("outlayer/outlayer", ["ev-emitter/ev-emitter", "get-size/get-size", "fizzy-ui-utils/utils", "./item"], function(EventEmitter, Backbone, jQuery, relativeToItem) {
        return factory(root, EventEmitter, Backbone, jQuery, relativeToItem);
      });
    } else {
      if (typeof module == "object" && module.exports) {
        module.exports = factory(root, require("ev-emitter"), require("get-size"), require("fizzy-ui-utils"), require("./item"));
      } else {
        root.Outlayer = factory(root, root.EvEmitter, root.getSize, root.fizzyUIUtils, root.Outlayer.Item);
      }
    }
  })(window, function outlayerDefinition(global, EventEmitter, getSize, $, item) {
    /**
     * @param {?} elem
     * @param {number} name
     * @return {undefined}
     */
    function data(elem, name) {
      var el = $.getQueryElement(elem);
      if (!el) {
        if (c) {
          c.error("Bad element for " + this.constructor.namespace + ": " + (el || elem));
        }
        return;
      }
      this.element = el;
      if (jQuery) {
        this.$element = jQuery(this.element);
      }
      this.options = $.extend({}, this.constructor.defaults);
      this.option(name);
      /** @type {number} */
      var id = ++rightId;
      /** @type {number} */
      this.element.outlayerGUID = id;
      done[id] = this;
      this._create();
      var bounds = this._getOption("initLayout");
      if (bounds) {
        this.layout();
      }
    }
    /**
     * @param {Function} parent
     * @return {?}
     */
    function create(parent) {
      /**
       * @return {undefined}
       */
      function Plugin() {
        parent.apply(this, arguments);
      }
      /** @type {Object} */
      Plugin.prototype = Object.create(parent.prototype);
      /** @type {function (): undefined} */
      Plugin.prototype.constructor = Plugin;
      return Plugin;
    }
    /**
     * @param {string} val
     * @return {?}
     */
    function isNumber(val) {
      if (typeof val == "number") {
        return val;
      }
      var units = val.match(/(^\d*\.?\d*)(\w*)/);
      var ms = units && units[1];
      var objUid = units && units[2];
      if (!ms.length) {
        return 0;
      }
      /** @type {number} */
      ms = parseFloat(ms);
      var isAdding = map[objUid] || 1;
      return ms * isAdding;
    }
    var c = global.console;
    var jQuery = global.jQuery;
    /**
     * @return {undefined}
     */
    var noop = function() {
    };
    /** @type {number} */
    var rightId = 0;
    var done = {};
    /** @type {string} */
    data.namespace = "outlayer";
    data.Item = item;
    data.defaults = {
      bypassCheck : false,
      containerStyle : {
        position : "relative"
      },
      initLayout : true,
      originLeft : true,
      originTop : true,
      resize : true,
      resizeContainer : true,
      transitionDuration : "0.4s",
      hiddenStyle : {
        opacity : 0,
        transform : "scale(0.001)"
      },
      visibleStyle : {
        opacity : 1,
        transform : "scale(1)"
      }
    };
    var self = data.prototype;
    $.extend(self, EventEmitter.prototype);
    /**
     * @param {number} options
     * @return {undefined}
     */
    self.option = function(options) {
      $.extend(this.options, options);
    };
    /**
     * @param {string} name
     * @return {?}
     */
    self._getOption = function(name) {
      var v = this.constructor.compatOptions[name];
      return v && this.options[v] !== undefined ? this.options[v] : this.options[name];
    };
    data.compatOptions = {
      initLayout : "isInitLayout",
      horizontal : "isHorizontal",
      layoutInstant : "isLayoutInstant",
      originLeft : "isOriginLeft",
      originTop : "isOriginTop",
      resize : "isResizeBound",
      resizeContainer : "isResizingContainer"
    };
    /**
     * @return {undefined}
     */
    self._create = function() {
      this.reloadItems();
      /** @type {Array} */
      this.stamps = [];
      this.stamp(this.options.stamp);
      $.extend(this.element.style, this.options.containerStyle);
      var resize = this._getOption("resize");
      if (resize) {
        this.bindResize();
      }
    };
    /**
     * @return {undefined}
     */
    self.reloadItems = function() {
      this.items = this._itemize(this.element.children);
    };
    /**
     * @param {?} elems
     * @return {?}
     */
    self._itemize = function(elems) {
      var codeSegments = this._filterFindItemElements(elems);
      var Item = this.constructor.Item;
      /** @type {Array} */
      var items = [];
      /** @type {number} */
      var i = 0;
      for (;i < codeSegments.length;i++) {
        var entry = codeSegments[i];
        var item = new Item(entry, this);
        items.push(item);
      }
      return items;
    };
    /**
     * @param {?} elems
     * @return {?}
     */
    self._filterFindItemElements = function(elems) {
      return $.filterFindElements(elems, this.options.itemSelector, this.options.bypassCheck);
    };
    /**
     * @return {?}
     */
    self.getItemElements = function() {
      return this.items.map(function(waypoint) {
        return waypoint.element;
      });
    };
    /**
     * @return {undefined}
     */
    self.layout = function() {
      this._resetLayout();
      this._manageStamps();
      var stored = this._getOption("layoutInstant");
      var deepDataAndEvents = stored !== undefined ? stored : !this._isLayoutInited;
      this.layoutItems(this.items, deepDataAndEvents);
      /** @type {boolean} */
      this._isLayoutInited = true;
    };
    /** @type {function (): undefined} */
    self._init = self.layout;
    /**
     * @return {undefined}
     */
    self._resetLayout = function() {
      this.getSize();
    };
    /**
     * @return {undefined}
     */
    self.getSize = function() {
      this.size = getSize(this.element);
    };
    /**
     * @param {string} measurement
     * @param {string} size
     * @return {undefined}
     */
    self._getMeasurement = function(measurement, size) {
      var option = this.options[measurement];
      var elem;
      if (!option) {
        /** @type {number} */
        this[measurement] = 0;
      } else {
        if (typeof option == "string") {
          elem = this.element.querySelector(option);
        } else {
          if (option instanceof HTMLElement) {
            /** @type {HTMLElement} */
            elem = option;
          }
        }
        this[measurement] = elem ? getSize(elem)[size] : option;
      }
    };
    /**
     * @param {(Array|string)} items
     * @param {boolean} deepDataAndEvents
     * @return {undefined}
     */
    self.layoutItems = function(items, deepDataAndEvents) {
      items = this._getItemsForLayout(items);
      this._layoutItems(items, deepDataAndEvents);
      this._postLayout();
    };
    /**
     * @param {Array} items
     * @return {?}
     */
    self._getItemsForLayout = function(items) {
      return items.filter(function(item) {
        return!item.isIgnored;
      });
    };
    /**
     * @param {Array} items
     * @param {boolean} deepDataAndEvents
     * @return {undefined}
     */
    self._layoutItems = function(items, deepDataAndEvents) {
      this._emitCompleteOnItems("layout", items);
      if (!items || !items.length) {
        return;
      }
      /** @type {Array} */
      var queue = [];
      items.forEach(function(item) {
        var position = this._getItemLayoutPosition(item);
        /** @type {Object} */
        position.item = item;
        position.isInstant = deepDataAndEvents || item.isLayoutInstant;
        queue.push(position);
      }, this);
      this._processLayoutQueue(queue);
    };
    /**
     * @return {?}
     */
    self._getItemLayoutPosition = function() {
      return{
        x : 0,
        y : 0
      };
    };
    /**
     * @param {Array} queue
     * @return {undefined}
     */
    self._processLayoutQueue = function(queue) {
      this.updateStagger();
      queue.forEach(function(obj, deepDataAndEvents) {
        this._positionItem(obj.item, obj.x, obj.y, obj.isInstant, deepDataAndEvents);
      }, this);
    };
    /**
     * @return {?}
     */
    self.updateStagger = function() {
      var val = this.options.stagger;
      if (val === null || val === undefined) {
        /** @type {number} */
        this.stagger = 0;
        return;
      }
      this.stagger = isNumber(val);
      return this.stagger;
    };
    /**
     * @param {CanvasRenderingContext2D} item
     * @param {?} x
     * @param {?} y
     * @param {?} isInstant
     * @param {?} deepDataAndEvents
     * @return {undefined}
     */
    self._positionItem = function(item, x, y, isInstant, deepDataAndEvents) {
      if (isInstant) {
        item.goTo(x, y);
      } else {
        item.stagger(deepDataAndEvents * this.stagger);
        item.moveTo(x, y);
      }
    };
    /**
     * @return {undefined}
     */
    self._postLayout = function() {
      this.resizeContainer();
    };
    /**
     * @return {undefined}
     */
    self.resizeContainer = function() {
      var bounds = this._getOption("resizeContainer");
      if (!bounds) {
        return;
      }
      var size = this._getContainerSize();
      if (size) {
        this._setContainerMeasure(size.width, true);
        this._setContainerMeasure(size.height, false);
      }
    };
    /** @type {function (): undefined} */
    self._getContainerSize = noop;
    /**
     * @param {number} measure
     * @param {boolean} isWidth
     * @return {undefined}
     */
    self._setContainerMeasure = function(measure, isWidth) {
      if (measure === undefined) {
        return;
      }
      var elemSize = this.size;
      if (elemSize.isBorderBox) {
        measure += isWidth ? elemSize.paddingLeft + elemSize.paddingRight + elemSize.borderLeftWidth + elemSize.borderRightWidth : elemSize.paddingBottom + elemSize.paddingTop + elemSize.borderTopWidth + elemSize.borderBottomWidth;
      }
      /** @type {number} */
      measure = Math.max(measure, 0);
      /** @type {string} */
      this.element.style[isWidth ? "width" : "height"] = measure + "px";
    };
    /**
     * @param {string} type
     * @param {Array} arr
     * @return {undefined}
     */
    self._emitCompleteOnItems = function(type, arr) {
      /**
       * @return {undefined}
       */
      function createTouchEvent() {
        target.dispatchEvent(type + "Complete", null, [arr]);
      }
      /**
       * @return {undefined}
       */
      function functionA() {
        uncaughtException++;
        if (uncaughtException == e) {
          createTouchEvent();
        }
      }
      var target = this;
      var e = arr.length;
      if (!arr || !e) {
        createTouchEvent();
        return;
      }
      /** @type {number} */
      var uncaughtException = 0;
      arr.forEach(function(emitter) {
        emitter.once(type, functionA);
      });
    };
    /**
     * @param {string} type
     * @param {Function} eventName
     * @param {Array} data
     * @return {undefined}
     */
    self.dispatchEvent = function(type, eventName, data) {
      var typePattern = eventName ? [eventName].concat(data) : data;
      this.emitEvent(type, typePattern);
      if (jQuery) {
        this.$element = this.$element || jQuery(this.element);
        if (eventName) {
          var e = jQuery.Event(eventName);
          /** @type {string} */
          e.type = type;
          this.$element.trigger(e, data);
        } else {
          this.$element.trigger(type, data);
        }
      }
    };
    /**
     * @param {?} elem
     * @return {undefined}
     */
    self.ignore = function(elem) {
      var item = this.getItem(elem);
      if (item) {
        /** @type {boolean} */
        item.isIgnored = true;
      }
    };
    /**
     * @param {?} elem
     * @return {undefined}
     */
    self.unignore = function(elem) {
      var item = this.getItem(elem);
      if (item) {
        delete item.isIgnored;
      }
    };
    /**
     * @param {Object} elems
     * @return {undefined}
     */
    self.stamp = function(elems) {
      elems = this._find(elems);
      if (!elems) {
        return;
      }
      this.stamps = this.stamps.concat(elems);
      elems.forEach(this.ignore, this);
    };
    /**
     * @param {Object} elems
     * @return {undefined}
     */
    self.unstamp = function(elems) {
      elems = this._find(elems);
      if (!elems) {
        return;
      }
      elems.forEach(function(elem) {
        $.removeFrom(this.stamps, elem);
        this.unignore(elem);
      }, this);
    };
    /**
     * @param {Object} elems
     * @return {?}
     */
    self._find = function(elems) {
      if (!elems) {
        return;
      }
      if (typeof elems == "string") {
        elems = this.element.querySelectorAll(elems);
      }
      elems = $.makeArray(elems);
      return elems;
    };
    /**
     * @return {undefined}
     */
    self._manageStamps = function() {
      if (!this.stamps || !this.stamps.length) {
        return;
      }
      this._getBoundingRect();
      this.stamps.forEach(this._manageStamp, this);
    };
    /**
     * @return {undefined}
     */
    self._getBoundingRect = function() {
      var boundingRect = this.element.getBoundingClientRect();
      var size = this.size;
      this._boundingRect = {
        left : boundingRect.left + size.paddingLeft + size.borderLeftWidth,
        top : boundingRect.top + size.paddingTop + size.borderTopWidth,
        right : boundingRect.right - (size.paddingRight + size.borderRightWidth),
        bottom : boundingRect.bottom - (size.paddingBottom + size.borderBottomWidth)
      };
    };
    /** @type {function (): undefined} */
    self._manageStamp = noop;
    /**
     * @param {Element} elem
     * @return {?}
     */
    self._getElementOffset = function(elem) {
      var boundingRect = elem.getBoundingClientRect();
      var thisRect = this._boundingRect;
      var size = getSize(elem);
      var offset = {
        left : boundingRect.left - thisRect.left - size.marginLeft,
        top : boundingRect.top - thisRect.top - size.marginTop,
        right : thisRect.right - boundingRect.right - size.marginRight,
        bottom : thisRect.bottom - boundingRect.bottom - size.marginBottom
      };
      return offset;
    };
    self.handleEvent = $.handleEvent;
    /**
     * @return {undefined}
     */
    self.bindResize = function() {
      global.addEventListener("resize", this);
      /** @type {boolean} */
      this.isResizeBound = true;
    };
    /**
     * @return {undefined}
     */
    self.unbindResize = function() {
      global.removeEventListener("resize", this);
      /** @type {boolean} */
      this.isResizeBound = false;
    };
    /**
     * @return {undefined}
     */
    self.onresize = function() {
      this.resize();
    };
    $.debounceMethod(data, "onresize", 100);
    /**
     * @return {undefined}
     */
    self.resize = function() {
      if (!this.isResizeBound || !this.needsResizeLayout()) {
        return;
      }
      this.layout();
    };
    /**
     * @return {?}
     */
    self.needsResizeLayout = function() {
      var size = getSize(this.element);
      var hasSizes = this.size && size;
      return hasSizes && size.innerWidth !== this.size.innerWidth;
    };
    /**
     * @param {?} elems
     * @return {?}
     */
    self.addItems = function(elems) {
      var items = this._itemize(elems);
      if (items.length) {
        this.items = this.items.concat(items);
      }
      return items;
    };
    /**
     * @param {?} elems
     * @return {undefined}
     */
    self.appended = function(elems) {
      var items = this.addItems(elems);
      if (!items.length) {
        return;
      }
      this.layoutItems(items, true);
      this.reveal(items);
    };
    /**
     * @param {?} elems
     * @return {undefined}
     */
    self.prepended = function(elems) {
      var items = this._itemize(elems);
      if (!items.length) {
        return;
      }
      var previousItems = this.items.slice(0);
      this.items = items.concat(previousItems);
      this._resetLayout();
      this._manageStamps();
      this.layoutItems(items, true);
      this.reveal(items);
      this.layoutItems(previousItems);
    };
    /**
     * @param {Array} items
     * @return {undefined}
     */
    self.reveal = function(items) {
      this._emitCompleteOnItems("reveal", items);
      if (!items || !items.length) {
        return;
      }
      var b1 = this.updateStagger();
      items.forEach(function(config, a4) {
        config.stagger(a4 * b1);
        config.reveal();
      });
    };
    /**
     * @param {Array} items
     * @return {undefined}
     */
    self.hide = function(items) {
      this._emitCompleteOnItems("hide", items);
      if (!items || !items.length) {
        return;
      }
      var b1 = this.updateStagger();
      items.forEach(function(data, a4) {
        data.stagger(a4 * b1);
        data.hide();
      });
    };
    /**
     * @param {Object} elems
     * @return {undefined}
     */
    self.revealItemElements = function(elems) {
      var items = this.getItems(elems);
      this.reveal(items);
    };
    /**
     * @param {Object} elems
     * @return {undefined}
     */
    self.hideItemElements = function(elems) {
      var removeItems = this.getItems(elems);
      this.hide(removeItems);
    };
    /**
     * @param {?} elem
     * @return {?}
     */
    self.getItem = function(elem) {
      /** @type {number} */
      var item = 0;
      for (;item < this.items.length;item++) {
        var i = this.items[item];
        if (i.element == elem) {
          return i;
        }
      }
    };
    /**
     * @param {Object} array
     * @return {?}
     */
    self.getItems = function(array) {
      array = $.makeArray(array);
      /** @type {Array} */
      var items = [];
      array.forEach(function(elem) {
        var item = this.getItem(elem);
        if (item) {
          items.push(item);
        }
      }, this);
      return items;
    };
    /**
     * @param {Object} elems
     * @return {undefined}
     */
    self.remove = function(elems) {
      var items = this.getItems(elems);
      this._emitCompleteOnItems("remove", items);
      if (!items || !items.length) {
        return;
      }
      items.forEach(function(elems) {
        elems.remove();
        $.removeFrom(this.items, elems);
      }, this);
    };
    /**
     * @return {undefined}
     */
    self.destroy = function() {
      var style = this.element.style;
      /** @type {string} */
      style.height = "";
      /** @type {string} */
      style.position = "";
      /** @type {string} */
      style.width = "";
      this.items.forEach(function(todo) {
        todo.destroy();
      });
      this.unbindResize();
      var id = this.element.outlayerGUID;
      delete done[id];
      delete this.element.outlayerGUID;
      if (jQuery) {
        jQuery.removeData(this.element, this.constructor.namespace);
      }
    };
    /**
     * @param {Element} elem
     * @return {?}
     */
    data.data = function(elem) {
      elem = $.getQueryElement(elem);
      var id = elem && elem.outlayerGUID;
      return id && done[id];
    };
    /**
     * @param {string} namespace
     * @param {?} config
     * @return {?}
     */
    data.create = function(namespace, config) {
      var self = create(data);
      self.defaults = $.extend({}, data.defaults);
      $.extend(self.defaults, config);
      self.compatOptions = $.extend({}, data.compatOptions);
      /** @type {string} */
      self.namespace = namespace;
      /** @type {function (Element): ?} */
      self.data = data.data;
      self.Item = create(item);
      $.htmlInit(self, namespace);
      if (jQuery && jQuery.bridget) {
        jQuery.bridget(namespace, self);
      }
      return self;
    };
    var map = {
      ms : 1,
      s : 1E3
    };
    data.Item = item;
    return data;
  });
  (function($, factory) {
    if (typeof define == "function" && define.amd) {
      define("isotope-layout/js/item", ["outlayer/outlayer"], factory);
    } else {
      if (typeof module == "object" && module.exports) {
        module.exports = factory(require("outlayer"));
      } else {
        $.Isotope = $.Isotope || {};
        $.Isotope.Item = factory($.Outlayer);
      }
    }
  })(window, function outlayerDefinition(models) {
    /**
     * @return {undefined}
     */
    function Outlayer() {
      models.Item.apply(this, arguments);
    }
    /** @type {Object} */
    var obj = Outlayer.prototype = Object.create(models.Item.prototype);
    /** @type {function (): undefined} */
    var html = obj._create;
    /**
     * @return {undefined}
     */
    obj._create = function() {
      /** @type {number} */
      this.id = this.layout.itemGUID++;
      html.call(this);
      this.sortData = {};
    };
    /**
     * @return {undefined}
     */
    obj.updateSortData = function() {
      if (this.isIgnored) {
        return;
      }
      this.sortData.id = this.id;
      this.sortData["original-order"] = this.id;
      /** @type {number} */
      this.sortData.random = Math.random();
      var mak = this.layout.options.getSortData;
      var segs = this.layout._sorters;
      var i;
      for (i in mak) {
        var seg = segs[i];
        this.sortData[i] = seg(this.element, this);
      }
    };
    /** @type {function (): undefined} */
    var matcherFunction = obj.destroy;
    /**
     * @return {undefined}
     */
    obj.destroy = function() {
      matcherFunction.apply(this, arguments);
      this.css({
        display : ""
      });
    };
    return Outlayer;
  });
  (function($, factory) {
    if (typeof define == "function" && define.amd) {
      define("isotope-layout/js/layout-mode", ["get-size/get-size", "outlayer/outlayer"], factory);
    } else {
      if (typeof module == "object" && module.exports) {
        module.exports = factory(require("get-size"), require("outlayer"));
      } else {
        $.Isotope = $.Isotope || {};
        $.Isotope.LayoutMode = factory($.getSize, $.Outlayer);
      }
    }
  })(window, function outlayerDefinition($, matchersClass) {
    /**
     * @param {Object} params
     * @return {undefined}
     */
    function init(params) {
      /** @type {Object} */
      this.isotope = params;
      if (params) {
        this.options = params.options[this.namespace];
        this.element = params.element;
        this.items = params.filteredItems;
        this.size = params.size;
      }
    }
    var proto = init.prototype;
    /** @type {Array} */
    var asserterNames = ["_resetLayout", "_getItemLayoutPosition", "_manageStamp", "_getContainerSize", "_getElementOffset", "needsResizeLayout", "_getOption"];
    asserterNames.forEach(function(methodName) {
      /**
       * @return {?}
       */
      proto[methodName] = function() {
        return matchersClass.prototype[methodName].apply(this.isotope, arguments);
      };
    });
    /**
     * @return {?}
     */
    proto.needsVerticalResizeLayout = function() {
      var first = $(this.isotope.element);
      var hideFirst = this.isotope.size && first;
      return hideFirst && first.innerHeight != this.isotope.size.innerHeight;
    };
    /**
     * @return {undefined}
     */
    proto._getMeasurement = function() {
      this.isotope._getMeasurement.apply(this, arguments);
    };
    /**
     * @return {undefined}
     */
    proto.getColumnWidth = function() {
      this.getSegmentSize("column", "Width");
    };
    /**
     * @return {undefined}
     */
    proto.getRowHeight = function() {
      this.getSegmentSize("row", "Height");
    };
    /**
     * @param {string} type
     * @param {string} name
     * @return {undefined}
     */
    proto.getSegmentSize = function(type, name) {
      var key = type + name;
      /** @type {string} */
      var action = "outer" + name;
      this._getMeasurement(key, action);
      if (this[key]) {
        return;
      }
      var api = this.getFirstItemSize();
      this[key] = api && api[action] || this.isotope.size["inner" + name];
    };
    /**
     * @return {?}
     */
    proto.getFirstItemSize = function() {
      var ui = this.isotope.filteredItems[0];
      return ui && (ui.element && $(ui.element));
    };
    /**
     * @return {undefined}
     */
    proto.layout = function() {
      this.isotope.layout.apply(this.isotope, arguments);
    };
    /**
     * @return {undefined}
     */
    proto.getSize = function() {
      this.isotope.getSize();
      this.size = this.isotope.size;
    };
    init.modes = {};
    /**
     * @param {string} name
     * @param {Object} o
     * @return {?}
     */
    init.create = function(name, o) {
      /**
       * @return {undefined}
       */
      function f() {
        init.apply(this, arguments);
      }
      /** @type {Object} */
      f.prototype = Object.create(proto);
      /** @type {function (): undefined} */
      f.prototype.constructor = f;
      if (o) {
        /** @type {Object} */
        f.options = o;
      }
      /** @type {string} */
      f.prototype.namespace = name;
      /** @type {function (): undefined} */
      init.modes[name] = f;
      return f;
    };
    return init;
  });
  (function(root, factory) {
    if (typeof define == "function" && define.amd) {
      define("masonry-layout/masonry", ["outlayer/outlayer", "get-size/get-size"], factory);
    } else {
      if (typeof module == "object" && module.exports) {
        module.exports = factory(require("outlayer"), require("get-size"));
      } else {
        root.Masonry = factory(root.Outlayer, root.getSize);
      }
    }
  })(window, function masonryDefinition(Outlayer, getSize) {
    var Masonry = Outlayer.create("masonry");
    /** @type {string} */
    Masonry.compatOptions.fitWidth = "isFitWidth";
    /**
     * @return {undefined}
     */
    Masonry.prototype._resetLayout = function() {
      this.getSize();
      this._getMeasurement("columnWidth", "outerWidth");
      this._getMeasurement("gutter", "outerWidth");
      this.measureColumns();
      /** @type {Array} */
      this.colYs = [];
      /** @type {number} */
      var i = 0;
      for (;i < this.cols;i++) {
        this.colYs.push(0);
      }
      /** @type {number} */
      this.maxY = 0;
    };
    /**
     * @return {undefined}
     */
    Masonry.prototype.measureColumns = function() {
      this.getContainerWidth();
      if (!this.columnWidth) {
        var firstItem = this.items[0];
        var firstItemElem = firstItem && firstItem.element;
        this.columnWidth = firstItemElem && getSize(firstItemElem).outerWidth || this.containerWidth;
      }
      var b = this.columnWidth += this.gutter;
      var a = this.containerWidth + this.gutter;
      /** @type {number} */
      var t = a / b;
      /** @type {number} */
      var i = b - a % b;
      /** @type {string} */
      var vname = i && i < 1 ? "round" : "floor";
      t = Math[vname](t);
      /** @type {number} */
      this.cols = Math.max(t, 1);
    };
    /**
     * @return {undefined}
     */
    Masonry.prototype.getContainerWidth = function() {
      var datalistId = this._getOption("fitWidth");
      var container = datalistId ? this.element.parentNode : this.element;
      var size = getSize(container);
      this.containerWidth = size && size.innerWidth;
    };
    /**
     * @param {Object} item
     * @return {?}
     */
    Masonry.prototype._getItemLayoutPosition = function(item) {
      item.getSize();
      /** @type {number} */
      var round = item.size.outerWidth % this.columnWidth;
      /** @type {string} */
      var vname = round && round < 1 ? "round" : "ceil";
      var colSpan = Math[vname](item.size.outerWidth / this.columnWidth);
      /** @type {number} */
      colSpan = Math.min(colSpan, this.cols);
      var colGroup = this._getColGroup(colSpan);
      /** @type {number} */
      var minimumY = Math.min.apply(Math, colGroup);
      var shortColIndex = colGroup.indexOf(minimumY);
      var position = {
        x : this.columnWidth * shortColIndex,
        y : minimumY
      };
      var setHeight = minimumY + item.size.outerHeight;
      /** @type {number} */
      var padLength = this.cols + 1 - colGroup.length;
      /** @type {number} */
      var i = 0;
      for (;i < padLength;i++) {
        this.colYs[shortColIndex + i] = setHeight;
      }
      return position;
    };
    /**
     * @param {number} colSpan
     * @return {?}
     */
    Masonry.prototype._getColGroup = function(colSpan) {
      if (colSpan < 2) {
        return this.colYs;
      }
      /** @type {Array} */
      var colGroup = [];
      /** @type {number} */
      var groupCount = this.cols + 1 - colSpan;
      /** @type {number} */
      var i = 0;
      for (;i < groupCount;i++) {
        var groupColYs = this.colYs.slice(i, i + colSpan);
        /** @type {number} */
        colGroup[i] = Math.max.apply(Math, groupColYs);
      }
      return colGroup;
    };
    /**
     * @param {Element} elem
     * @return {undefined}
     */
    Masonry.prototype._manageStamp = function(elem) {
      var stampSize = getSize(elem);
      var offset = this._getElementOffset(elem);
      var isFirst = this._getOption("originLeft");
      var firstX = isFirst ? offset.left : offset.right;
      var lastX = firstX + stampSize.outerWidth;
      /** @type {number} */
      var startIndex = Math.floor(firstX / this.columnWidth);
      /** @type {number} */
      startIndex = Math.max(0, startIndex);
      /** @type {number} */
      var lastCol = Math.floor(lastX / this.columnWidth);
      lastCol -= lastX % this.columnWidth ? 0 : 1;
      /** @type {number} */
      lastCol = Math.min(this.cols - 1, lastCol);
      var inside = this._getOption("originTop");
      var stampMaxY = (inside ? offset.top : offset.bottom) + stampSize.outerHeight;
      /** @type {number} */
      var i = startIndex;
      for (;i <= lastCol;i++) {
        /** @type {number} */
        this.colYs[i] = Math.max(stampMaxY, this.colYs[i]);
      }
    };
    /**
     * @return {?}
     */
    Masonry.prototype._getContainerSize = function() {
      /** @type {number} */
      this.maxY = Math.max.apply(Math, this.colYs);
      var size = {
        height : this.maxY
      };
      if (this._getOption("fitWidth")) {
        size.width = this._getContainerFitWidth();
      }
      return size;
    };
    /**
     * @return {?}
     */
    Masonry.prototype._getContainerFitWidth = function() {
      /** @type {number} */
      var unusedCols = 0;
      var i = this.cols;
      for (;--i;) {
        if (this.colYs[i] !== 0) {
          break;
        }
        unusedCols++;
      }
      return(this.cols - unusedCols) * this.columnWidth - this.gutter;
    };
    /**
     * @return {?}
     */
    Masonry.prototype.needsResizeLayout = function() {
      var containerWidth = this.containerWidth;
      this.getContainerWidth();
      return containerWidth != this.containerWidth;
    };
    return Masonry;
  });
  (function($, factory) {
    if (typeof define == "function" && define.amd) {
      define("isotope-layout/js/layout-modes/masonry", ["../layout-mode", "masonry-layout/masonry"], factory);
    } else {
      if (typeof module == "object" && module.exports) {
        module.exports = factory(require("../layout-mode"), require("masonry-layout"));
      } else {
        factory($.Isotope.LayoutMode, $.Masonry);
      }
    }
  })(window, function masonryDefinition(Outlayer, Server) {
    var Masonry = Outlayer.create("masonry");
    var p = Masonry.prototype;
    var result = {
      _getElementOffset : true,
      layout : true,
      _getMeasurement : true
    };
    var key;
    for (key in Server.prototype) {
      if (!result[key]) {
        p[key] = Server.prototype[key];
      }
    }
    /** @type {function (): undefined} */
    var pl = p.measureColumns;
    /**
     * @return {undefined}
     */
    p.measureColumns = function() {
      this.items = this.isotope.filteredItems;
      pl.call(this);
    };
    /** @type {function (string): ?} */
    var matcherFunction = p._getOption;
    /**
     * @param {string} name
     * @return {?}
     */
    p._getOption = function(name) {
      if (name == "fitWidth") {
        return this.options.isFitWidth !== undefined ? this.options.isFitWidth : this.options.fitWidth;
      }
      return matcherFunction.apply(this.isotope, arguments);
    };
    return Masonry;
  });
  (function($, factory) {
    if (typeof define == "function" && define.amd) {
      define("isotope-layout/js/layout-modes/fit-rows", ["../layout-mode"], factory);
    } else {
      if (typeof exports == "object") {
        module.exports = factory(require("../layout-mode"));
      } else {
        factory($.Isotope.LayoutMode);
      }
    }
  })(window, function packeryDefinition(Outlayer) {
    var left = Outlayer.create("fitRows");
    var a = left.prototype;
    /**
     * @return {undefined}
     */
    a._resetLayout = function() {
      /** @type {number} */
      this.x = 0;
      /** @type {number} */
      this.y = 0;
      /** @type {number} */
      this.maxY = 0;
      this._getMeasurement("gutter", "outerWidth");
    };
    /**
     * @param {Object} item
     * @return {?}
     */
    a._getItemLayoutPosition = function(item) {
      item.getSize();
      var x = item.size.outerWidth + this.gutter;
      var maxX = this.isotope.size.innerWidth + this.gutter;
      if (this.x !== 0 && x + this.x > maxX) {
        /** @type {number} */
        this.x = 0;
        this.y = this.maxY;
      }
      var position = {
        x : this.x,
        y : this.y
      };
      /** @type {number} */
      this.maxY = Math.max(this.maxY, this.y + item.size.outerHeight);
      this.x += x;
      return position;
    };
    /**
     * @return {?}
     */
    a._getContainerSize = function() {
      return{
        height : this.maxY
      };
    };
    return left;
  });
  (function($, factory) {
    if (typeof define == "function" && define.amd) {
      define("isotope-layout/js/layout-modes/vertical", ["../layout-mode"], factory);
    } else {
      if (typeof module == "object" && module.exports) {
        module.exports = factory(require("../layout-mode"));
      } else {
        factory($.Isotope.LayoutMode);
      }
    }
  })(window, function packeryDefinition(pane) {
    var left = pane.create("vertical", {
      horizontalAlignment : 0
    });
    var a = left.prototype;
    /**
     * @return {undefined}
     */
    a._resetLayout = function() {
      /** @type {number} */
      this.y = 0;
    };
    /**
     * @param {Object} item
     * @return {?}
     */
    a._getItemLayoutPosition = function(item) {
      item.getSize();
      /** @type {number} */
      var moveX = (this.isotope.size.innerWidth - item.size.outerWidth) * this.options.horizontalAlignment;
      var oldY = this.y;
      this.y += item.size.outerHeight;
      return{
        x : moveX,
        y : oldY
      };
    };
    /**
     * @return {?}
     */
    a._getContainerSize = function() {
      return{
        height : this.y
      };
    };
    return left;
  });
  (function(root, factory) {
    if (typeof define == "function" && define.amd) {
      define("isotope-layout/js/isotope", ["outlayer/outlayer", "get-size/get-size", "desandro-matches-selector/matches-selector", "fizzy-ui-utils/utils", "./item", "./layout-mode", "./layout-modes/masonry", "./layout-modes/fit-rows", "./layout-modes/vertical"], function(errorClass, deepDataAndEvents, _, $, domHelper, walkers) {
        return factory(root, errorClass, deepDataAndEvents, _, $, domHelper, walkers);
      });
    } else {
      if (typeof module == "object" && module.exports) {
        module.exports = factory(root, require("outlayer"), require("get-size"), require("desandro-matches-selector"), require("fizzy-ui-utils"), require("./item"), require("./layout-mode"), require("./layout-modes/masonry"), require("./layout-modes/fit-rows"), require("./layout-modes/vertical"));
      } else {
        root.Isotope = factory(root, root.Outlayer, root.getSize, root.matchesSelector, root.fizzyUIUtils, root.Isotope.Item, root.Isotope.LayoutMode);
      }
    }
  })(window, function outlayerDefinition(global, Outlayer, deepDataAndEvents, next, $, Item, obj) {
    /**
     * @param {Array} codeSegments
     * @param {string} params
     * @return {?}
     */
    function layout(codeSegments, params) {
      return function sync(self, options) {
        /** @type {number} */
        var i = 0;
        for (;i < codeSegments.length;i++) {
          var param = codeSegments[i];
          var correctedAge = self.sortData[param];
          var currentAge = options.sortData[param];
          if (correctedAge > currentAge || correctedAge < currentAge) {
            var p = params[param] !== undefined ? params[param] : params;
            /** @type {number} */
            var windows = p ? 1 : -1;
            return(correctedAge > currentAge ? 1 : -1) * windows;
          }
        }
        return 0;
      };
    }
    var jQuery = global.jQuery;
    /** @type {function (Object): ?} */
    var trim = String.prototype.trim ? function(e) {
      return e.trim();
    } : function(value1) {
      return value1.replace(/^\s+|\s+$/g, "");
    };
    var module = Outlayer.create("isotope", {
      layoutMode : "masonry",
      isJQueryFiltering : true,
      sortAscending : true
    });
    module.Item = Item;
    module.LayoutMode = obj;
    var self = module.prototype;
    /**
     * @return {undefined}
     */
    self._create = function() {
      /** @type {number} */
      this.itemGUID = 0;
      this._sorters = {};
      this._getSorters();
      Outlayer.prototype._create.call(this);
      this.modes = {};
      this.filteredItems = this.items;
      /** @type {Array} */
      this.sortHistory = ["original-order"];
      var classNames;
      for (classNames in obj.modes) {
        this._initLayoutMode(classNames);
      }
    };
    /**
     * @return {undefined}
     */
    self.reloadItems = function() {
      /** @type {number} */
      this.itemGUID = 0;
      Outlayer.prototype.reloadItems.call(this);
    };
    /**
     * @return {?}
     */
    self._itemize = function() {
      var ca = Outlayer.prototype._itemize.apply(this, arguments);
      /** @type {number} */
      var i = 0;
      for (;i < ca.length;i++) {
        var c = ca[i];
        /** @type {number} */
        c.id = this.itemGUID++;
      }
      this._updateItemsSortData(ca);
      return ca;
    };
    /**
     * @param {string} i
     * @return {undefined}
     */
    self._initLayoutMode = function(i) {
      var point = obj.modes[i];
      var options = this.options[i] || {};
      this.options[i] = point.options ? $.extend(point.options, options) : options;
      this.modes[i] = new point(this);
    };
    /**
     * @return {undefined}
     */
    self.layout = function() {
      if (!this._isLayoutInited && this._getOption("initLayout")) {
        this.arrange();
        return;
      }
      this._layout();
    };
    /**
     * @return {undefined}
     */
    self._layout = function() {
      var deepDataAndEvents = this._getIsInstant();
      this._resetLayout();
      this._manageStamps();
      this.layoutItems(this.filteredItems, deepDataAndEvents);
      /** @type {boolean} */
      this._isLayoutInited = true;
    };
    /**
     * @param {number} pending
     * @return {undefined}
     */
    self.arrange = function(pending) {
      this.option(pending);
      this._getIsInstant();
      var node = this._filter(this.items);
      this.filteredItems = node.matches;
      this._bindArrangeComplete();
      if (this._isInstant) {
        this._noTransition(this._hideReveal, [node]);
      } else {
        this._hideReveal(node);
      }
      this._sort();
      this._layout();
    };
    /** @type {function (number): undefined} */
    self._init = self.arrange;
    /**
     * @param {?} dataAndEvents
     * @return {undefined}
     */
    self._hideReveal = function(dataAndEvents) {
      this.reveal(dataAndEvents.needReveal);
      this.hide(dataAndEvents.needHide);
    };
    /**
     * @return {?}
     */
    self._getIsInstant = function() {
      var value = this._getOption("layoutInstant");
      var arr = value !== undefined ? value : !this._isLayoutInited;
      this._isInstant = arr;
      return arr;
    };
    /**
     * @return {undefined}
     */
    self._bindArrangeComplete = function() {
      /**
       * @return {undefined}
       */
      function createTouchEvent() {
        if (a && (b && inner1)) {
          obj.dispatchEvent("arrangeComplete", null, [obj.filteredItems]);
        }
      }
      var a;
      var b;
      var inner1;
      var obj = this;
      this.once("layoutComplete", function() {
        /** @type {boolean} */
        a = true;
        createTouchEvent();
      });
      this.once("hideComplete", function() {
        /** @type {boolean} */
        b = true;
        createTouchEvent();
      });
      this.once("revealComplete", function() {
        /** @type {boolean} */
        inner1 = true;
        createTouchEvent();
      });
    };
    /**
     * @param {Array} path
     * @return {?}
     */
    self._filter = function(path) {
      var which = this.options.filter;
      which = which || "*";
      /** @type {Array} */
      var matched = [];
      /** @type {Array} */
      var caseSensitive = [];
      /** @type {Array} */
      var beginswith = [];
      var keys = this._getFilterTest(which);
      /** @type {number} */
      var i = 0;
      for (;i < path.length;i++) {
        var item = path[i];
        if (item.isIgnored) {
          continue;
        }
        var properties = keys(item);
        if (properties) {
          matched.push(item);
        }
        if (properties && item.isHidden) {
          caseSensitive.push(item);
        } else {
          if (!properties && !item.isHidden) {
            beginswith.push(item);
          }
        }
      }
      return{
        matches : matched,
        needReveal : caseSensitive,
        needHide : beginswith
      };
    };
    /**
     * @param {?} callback
     * @return {?}
     */
    self._getFilterTest = function(callback) {
      if (jQuery && this.options.isJQueryFiltering) {
        return function(types) {
          return jQuery(types.element).is(callback);
        };
      }
      if (typeof callback == "function") {
        return function(v) {
          return callback(v.element);
        };
      }
      return function(result) {
        return next(result.element, callback);
      };
    };
    /**
     * @param {Object} data
     * @return {undefined}
     */
    self.updateSortData = function(data) {
      var items;
      if (data) {
        data = $.makeArray(data);
        items = this.getItems(data);
      } else {
        items = this.items;
      }
      this._getSorters();
      this._updateItemsSortData(items);
    };
    var definition = function() {
      /**
       * @param {Function} value
       * @return {?}
       */
      function validator(value) {
        if (typeof value != "string") {
          return value;
        }
        var names = trim(value).split(" ");
        var requestUrl = names[0];
        var n = requestUrl.match(/^\[(.+)\]$/);
        var a = n && n[1];
        var fn = isValue(a, requestUrl);
        var callback = module.sortDataParsers[names[1]];
        /** @type {function ((Node|string)): ?} */
        value = callback ? function(el) {
          return el && callback(fn(el));
        } : function(err) {
          return err && fn(err);
        };
        return value;
      }
      /**
       * @param {?} a
       * @param {?} val
       * @return {?}
       */
      function isValue(a, val) {
        if (a) {
          return function _getAttr(element) {
            return element.getAttribute(a);
          };
        }
        return function create(scope) {
          var node = scope.querySelector(val);
          return node && node.textContent;
        };
      }
      return validator;
    }();
    /**
     * @return {undefined}
     */
    self._getSorters = function() {
      var testSource = this.options.getSortData;
      var name;
      for (name in testSource) {
        var ref = testSource[name];
        this._sorters[name] = definition(ref);
      }
    };
    /**
     * @param {Array} arr
     * @return {undefined}
     */
    self._updateItemsSortData = function(arr) {
      var length = arr && arr.length;
      if (!length) {
        return;
      }
      /** @type {number} */
      var i = 0;
      for (;i < length;i++) {
        var val = arr[i];
        val.updateSortData();
      }
    };
    module.sortDataParsers = {
      /**
       * @param {?} value
       * @return {?}
       */
      parseInt : function(value) {
        return parseInt(value, 10);
      },
      /**
       * @param {?} value
       * @return {?}
       */
      parseFloat : function(value) {
        return parseFloat(value);
      }
    };
    /**
     * @return {undefined}
     */
    self._sort = function() {
      if (!this.options.sortBy) {
        return;
      }
      var fxAttrs = $.makeArray(this.options.sortBy);
      if (!this._getIsSameSortBy(fxAttrs)) {
        this.sortHistory = fxAttrs.concat(this.sortHistory);
      }
      var sortFn = layout(this.sortHistory, this.options.sortAscending);
      this.filteredItems.sort(sortFn);
    };
    /**
     * @param {Array} codeSegments
     * @return {?}
     */
    self._getIsSameSortBy = function(codeSegments) {
      /** @type {number} */
      var i = 0;
      for (;i < codeSegments.length;i++) {
        if (codeSegments[i] != this.sortHistory[i]) {
          return false;
        }
      }
      return true;
    };
    /**
     * @return {?}
     */
    self._mode = function() {
      var i = this.options.layoutMode;
      var self = this.modes[i];
      if (!self) {
        throw new Error("No layout mode: " + i);
      }
      self.options = this.options[i];
      return self;
    };
    /**
     * @return {undefined}
     */
    self._resetLayout = function() {
      Outlayer.prototype._resetLayout.call(this);
      this._mode()._resetLayout();
    };
    /**
     * @param {Object} compareFn
     * @return {?}
     */
    self._getItemLayoutPosition = function(compareFn) {
      return this._mode()._getItemLayoutPosition(compareFn);
    };
    /**
     * @param {Element} owner
     * @return {undefined}
     */
    self._manageStamp = function(owner) {
      this._mode()._manageStamp(owner);
    };
    /**
     * @return {?}
     */
    self._getContainerSize = function() {
      return this._mode()._getContainerSize();
    };
    /**
     * @return {?}
     */
    self.needsResizeLayout = function() {
      return this._mode().needsResizeLayout();
    };
    /**
     * @param {?} elems
     * @return {undefined}
     */
    self.appended = function(elems) {
      var items = this.addItems(elems);
      if (!items.length) {
        return;
      }
      var r = this._filterRevealAdded(items);
      this.filteredItems = this.filteredItems.concat(r);
    };
    /**
     * @param {?} elems
     * @return {undefined}
     */
    self.prepended = function(elems) {
      var items = this._itemize(elems);
      if (!items.length) {
        return;
      }
      this._resetLayout();
      this._manageStamps();
      var r = this._filterRevealAdded(items);
      this.layoutItems(this.filteredItems);
      this.filteredItems = r.concat(this.filteredItems);
      this.items = items.concat(this.items);
    };
    /**
     * @param {?} value
     * @return {?}
     */
    self._filterRevealAdded = function(value) {
      var set = this._filter(value);
      this.hide(set.needHide);
      this.reveal(set.matches);
      this.layoutItems(set.matches, true);
      return set.matches;
    };
    /**
     * @param {?} elem
     * @return {undefined}
     */
    self.insert = function(elem) {
      var q = this.addItems(elem);
      if (!q.length) {
        return;
      }
      var i;
      var component;
      var l = q.length;
      /** @type {number} */
      i = 0;
      for (;i < l;i++) {
        component = q[i];
        this.element.appendChild(component.element);
      }
      var items = this._filter(q).matches;
      /** @type {number} */
      i = 0;
      for (;i < l;i++) {
        /** @type {boolean} */
        q[i].isLayoutInstant = true;
      }
      this.arrange();
      /** @type {number} */
      i = 0;
      for (;i < l;i++) {
        delete q[i].isLayoutInstant;
      }
      this.reveal(items);
    };
    /** @type {function (Object): undefined} */
    var _remove = self.remove;
    /**
     * @param {Object} selector
     * @return {undefined}
     */
    self.remove = function(selector) {
      selector = $.makeArray(selector);
      var items = this.getItems(selector);
      _remove.call(this, selector);
      var amount = items && items.length;
      if (!amount) {
        return;
      }
      /** @type {number} */
      var i = 0;
      for (;i < amount;i++) {
        var ob = items[i];
        $.removeFrom(this.filteredItems, ob);
      }
    };
    /**
     * @return {undefined}
     */
    self.shuffle = function() {
      /** @type {number} */
      var i = 0;
      for (;i < this.items.length;i++) {
        var self = this.items[i];
        /** @type {number} */
        self.sortData.random = Math.random();
      }
      /** @type {string} */
      this.options.sortBy = "random";
      this._sort();
      this._layout();
    };
    /**
     * @param {Function} handle
     * @param {Array} data
     * @return {?}
     */
    self._noTransition = function(handle, data) {
      var transitionDuration = this.options.transitionDuration;
      /** @type {number} */
      this.options.transitionDuration = 0;
      var buf = handle.apply(this, data);
      this.options.transitionDuration = transitionDuration;
      return buf;
    };
    /**
     * @return {?}
     */
    self.getFilteredItemElements = function() {
      return this.filteredItems.map(function(waypoint) {
        return waypoint.element;
      });
    };
    return module;
  });
  /** @type {number} */
  var i = 0;
  for (;i < len;i += step) {
    if (i + step < len) {
      colNames.push(str.substring(i, i + step));
    } else {
      colNames.push(str.substring(i, len));
    }
  }
  return colNames;
}
;
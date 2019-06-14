/**
 * Element.closest polyfill:
 * https://developer.mozilla.org/en-US/docs/Web/API/Element/closest
 */
if (!Element.prototype.matches) {
    Element.prototype.matches = Element.prototype.msMatchesSelector ||
        Element.prototype.webkitMatchesSelector;
}

if (!Element.prototype.closest) {
    Element.prototype.closest = function (s) {
        var el = this;
        if (!document.documentElement.contains(el)) return null;
        do {
            if (el.matches(s)) return el;
            el = el.parentElement || el.parentNode;
        } while (el !== null && el.nodeType === 1);
        return null;
    };
}


/**
 * Does it dijon?
 *
 * The matchMedia API is supported by IE10 and IE11.
 * If the browser supports this then we know it has better standards support than IE9.
 */
if (typeof window.matchMedia !== 'undefined') {

    // The default behaviour is to add a `js` class to the HTML element if
    // Javascript is available. The class is added in the <head> for better performance

    // Helper function for finding elements
    function findElement(target) {
        // querySelector returns the first element on a page that matches the selector.
        // For IDs, there should only be one match per page. For classes, it would return the first element with that class.
        return document.querySelector(target);
    }

    // Check for if an element exists
    function exists(elem) {
        return (elem != null && (elem.length >= 0 || elem.innerHTML.length >= 0) )
    }


    // classList polyfill until browser support is better

    /*
 * classList.js: Cross-browser full element.classList implementation.
 * 1.2.20171210
 *
 * By Eli Grey, http://eligrey.com
 * License: Dedicated to the public domain.
 *   See https://github.com/eligrey/classList.js/blob/master/LICENSE.md
 */

    /*global self, document, DOMException */

    /*! @source http://purl.eligrey.com/github/classList.js/blob/master/classList.js */

    if ("document" in self) {

// Full polyfill for browsers with no classList support
// Including IE < Edge missing SVGElement.classList
        if (
            !("classList" in document.createElement("_"))
            || document.createElementNS
            && !("classList" in document.createElementNS("http://www.w3.org/2000/svg","g"))
        ) {

            (function (view) {

                "use strict";

                if (!('Element' in view)) return;

                var
                    classListProp = "classList"
                    , protoProp = "prototype"
                    , elemCtrProto = view.Element[protoProp]
                    , objCtr = Object
                    , strTrim = String[protoProp].trim || function () {
                        return this.replace(/^\s+|\s+$/g, "");
                    }
                    , arrIndexOf = Array[protoProp].indexOf || function (item) {
                        var
                            i = 0
                            , len = this.length
                        ;
                        for (; i < len; i++) {
                            if (i in this && this[i] === item) {
                                return i;
                            }
                        }
                        return -1;
                    }
                    // Vendors: please allow content code to instantiate DOMExceptions
                    , DOMEx = function (type, message) {
                        this.name = type;
                        this.code = DOMException[type];
                        this.message = message;
                    }
                    , checkTokenAndGetIndex = function (classList, token) {
                        if (token === "") {
                            throw new DOMEx(
                                "SYNTAX_ERR"
                                , "The token must not be empty."
                            );
                        }
                        if (/\s/.test(token)) {
                            throw new DOMEx(
                                "INVALID_CHARACTER_ERR"
                                , "The token must not contain space characters."
                            );
                        }
                        return arrIndexOf.call(classList, token);
                    }
                    , ClassList = function (elem) {
                        var
                            trimmedClasses = strTrim.call(elem.getAttribute("class") || "")
                            , classes = trimmedClasses ? trimmedClasses.split(/\s+/) : []
                            , i = 0
                            , len = classes.length
                        ;
                        for (; i < len; i++) {
                            this.push(classes[i]);
                        }
                        this._updateClassName = function () {
                            elem.setAttribute("class", this.toString());
                        };
                    }
                    , classListProto = ClassList[protoProp] = []
                    , classListGetter = function () {
                        return new ClassList(this);
                    }
                ;
// Most DOMException implementations don't allow calling DOMException's toString()
// on non-DOMExceptions. Error's toString() is sufficient here.
                DOMEx[protoProp] = Error[protoProp];
                classListProto.item = function (i) {
                    return this[i] || null;
                };
                classListProto.contains = function (token) {
                    return ~checkTokenAndGetIndex(this, token + "");
                };
                classListProto.add = function () {
                    var
                        tokens = arguments
                        , i = 0
                        , l = tokens.length
                        , token
                        , updated = false
                    ;
                    do {
                        token = tokens[i] + "";
                        if (!~checkTokenAndGetIndex(this, token)) {
                            this.push(token);
                            updated = true;
                        }
                    }
                    while (++i < l);

                    if (updated) {
                        this._updateClassName();
                    }
                };
                classListProto.remove = function () {
                    var
                        tokens = arguments
                        , i = 0
                        , l = tokens.length
                        , token
                        , updated = false
                        , index
                    ;
                    do {
                        token = tokens[i] + "";
                        index = checkTokenAndGetIndex(this, token);
                        while (~index) {
                            this.splice(index, 1);
                            updated = true;
                            index = checkTokenAndGetIndex(this, token);
                        }
                    }
                    while (++i < l);

                    if (updated) {
                        this._updateClassName();
                    }
                };
                classListProto.toggle = function (token, force) {
                    var
                        result = this.contains(token)
                        , method = result ?
                        force !== true && "remove"
                        :
                        force !== false && "add"
                    ;

                    if (method) {
                        this[method](token);
                    }

                    if (force === true || force === false) {
                        return force;
                    } else {
                        return !result;
                    }
                };
                classListProto.replace = function (token, replacement_token) {
                    var index = checkTokenAndGetIndex(token + "");
                    if (~index) {
                        this.splice(index, 1, replacement_token);
                        this._updateClassName();
                    }
                }
                classListProto.toString = function () {
                    return this.join(" ");
                };

                if (objCtr.defineProperty) {
                    var classListPropDesc = {
                        get: classListGetter
                        , enumerable: true
                        , configurable: true
                    };
                    try {
                        objCtr.defineProperty(elemCtrProto, classListProp, classListPropDesc);
                    } catch (ex) { // IE 8 doesn't support enumerable:true
                        // adding undefined to fight this issue https://github.com/eligrey/classList.js/issues/36
                        // modernie IE8-MSW7 machine has IE8 8.0.6001.18702 and is affected
                        if (ex.number === undefined || ex.number === -0x7FF5EC54) {
                            classListPropDesc.enumerable = false;
                            objCtr.defineProperty(elemCtrProto, classListProp, classListPropDesc);
                        }
                    }
                } else if (objCtr[protoProp].__defineGetter__) {
                    elemCtrProto.__defineGetter__(classListProp, classListGetter);
                }

            }(self));

        }

// There is full or partial native classList support, so just check if we need
// to normalize the add/remove and toggle APIs.

        (function () {
            "use strict";

            var testElement = document.createElement("_");

            testElement.classList.add("c1", "c2");

            // Polyfill for IE 10/11 and Firefox <26, where classList.add and
            // classList.remove exist but support only one argument at a time.
            if (!testElement.classList.contains("c2")) {
                var createMethod = function(method) {
                    var original = DOMTokenList.prototype[method];

                    DOMTokenList.prototype[method] = function(token) {
                        var i, len = arguments.length;

                        for (i = 0; i < len; i++) {
                            token = arguments[i];
                            original.call(this, token);
                        }
                    };
                };
                createMethod('add');
                createMethod('remove');
            }

            testElement.classList.toggle("c3", false);

            // Polyfill for IE 10 and Firefox <24, where classList.toggle does not
            // support the second argument.
            if (testElement.classList.contains("c3")) {
                var _toggle = DOMTokenList.prototype.toggle;

                DOMTokenList.prototype.toggle = function(token, force) {
                    if (1 in arguments && !this.contains(token) === !force) {
                        return force;
                    } else {
                        return _toggle.call(this, token);
                    }
                };

            }

            // replace() polyfill
            if (!("replace" in document.createElement("_").classList)) {
                DOMTokenList.prototype.replace = function (token, replacement_token) {
                    var
                        tokens = this.toString().split(" ")
                        , index = tokens.indexOf(token + "")
                    ;
                    if (~index) {
                        tokens = tokens.slice(index);
                        this.remove.apply(this, tokens);
                        this.add(replacement_token);
                        this.add.apply(this, tokens.slice(1));
                    }
                }
            }

            testElement = null;
        }());

    }

    if (matchMedia) {
        var mq = window.matchMedia("(min-width: 1000px)");
        mq.addListener(updateARIAroles);
    }

    var contentToggler = document.querySelectorAll('[data-toggler]');

    function updateARIAroles() {

        if (exists(contentToggler)) {

            // This allows us to iterate on multiple elements [1]
            var index = 0;
            for (index = 0; index < contentToggler.length; index++) {

                // Find the element's toggle target by looking for data-toggle
                // Note: we're using `getAttribute` instead of `dataset.` due to better browser support for the former
                var target = contentToggler[index].getAttribute('data-toggler');
                var contentTarget = [];
                contentTarget[index] = $('[data-toggle="' + target + '"]');

                if (mq.matches && target == "nav") {

                    // Set default aria attributes
                    // Hide all elements
                    contentToggler[index].setAttribute('aria-expanded', true);
                    contentTarget[index].setAttribute('aria-hidden', false);
                    // contentTarget[index].setAttribute('hidden', true);

                }
                else {

                    // Set default aria attributes
                    // Hide all elements
                    contentToggler[index].setAttribute('aria-expanded', false);
                    contentTarget[index].setAttribute('aria-hidden', true);

                }


            }


        } // end of exists

    } // end of function

    document.addEventListener('DOMContentLoaded', function () {

        updateARIAroles();

        // Traverse DOM and create variables
        var body = findElement('body');

    });
    //End of ready()

}
// End of dijon
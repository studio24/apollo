(function () {
    var polyfill = function (view) {
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
        };
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
    };

    myApp.extend('polyfill', polyfill)

})();
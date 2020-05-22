// The core app code
var myApp = (function () {

    'use strict';

    // Create a public methods object
    var methods = {};

    /**
     * Extend the public methods object
     * @param  {String}   name The new method name
     * @param  {Function} fn   The new method
     */
    methods.extend = function (name, fn) {
        methods[name] = fn;
    };

    // Return public methods object
    return methods;

})();
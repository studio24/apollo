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
            myApp.polyfill(self)
        }

// There is full or partial native classList support, so just check if we need
// to normalize the add/remove and toggle APIs.

        myApp.normalize();
    }

    if (matchMedia) {
        var mq = window.matchMedia("(min-width: 1000px)");
        mq.addEventListener("change", myApp.updateARIAroles);
    }

    var contentToggler = document.querySelectorAll('[data-toggler]');

    myApp.updateARIAroles(contentToggler);

    // Collapsible
    var collapsibleHeading = document.querySelectorAll('.js-collapsible-heading');

    myApp.collaps(collapsibleHeading);

    // Tab
    myApp.tabs();

    document.addEventListener('DOMContentLoaded', function () {

        myApp.updateARIAroles(null);

        // Traverse DOM and create variables
        var body = findElement('body');

    });
    //End of ready()
}
// End of dijon
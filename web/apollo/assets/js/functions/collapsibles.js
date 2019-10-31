(function () {
    var nextUntil = function (elem, selector) {

        // Setup siblings array
        var siblings = [];

        // Get the next sibling element
        elem = elem.nextElementSibling;

        // As long as a sibling exists
        while (elem) {

            // If we've reached our match, bail
            if (elem.matches(selector)) break;

            // Otherwise, push it to the siblings array
            siblings.push(elem);

            // Get the next sibling element
            elem = elem.nextElementSibling;

        }
        return siblings;
    };

    var collaps = function (collapsibleHeading){
        collapsibleHeading.forEach( obj => {

            var thisElement = obj;

            // create unique id for a11y relationship
            var id = 'collapsible-' + Array.prototype.indexOf.call(collapsibleHeading, thisElement);

            // wrap the content and make it focusable
            nextUntil(thisElement, '.js-collapsible-heading')[0].insertAdjacentHTML("afterend", '<div class="js-collapsible-content collapsible-content" id="' + id + '" aria-hidden="true"></div>');

            var fragment = document.createDocumentFragment();
            fragment.appendChild(nextUntil(thisElement, '.js-collapsible-heading')[0]);
            thisElement.nextElementSibling.appendChild(fragment);

            var panel = thisElement.nextElementSibling;

            // Add the button inside `.js-collapsible-heading` so both the heading and button semanics are read

            thisElement.innerHTML = '<button aria-expanded="false" type="button" aria-controls="' + id + '">' + thisElement.textContent + '</button>';

            thisElement.classList.add('collapsible-heading');
            var button = thisElement.children;

            // Toggle the state properties
            button[0].addEventListener("click", function () {
                var state = this.getAttribute('aria-expanded') === 'false';
                this.setAttribute('aria-expanded', state);
                panel.setAttribute('aria-hidden', !state);
            });
        });
    };

    myApp.extend('nextUntil', nextUntil);
    myApp.extend('collaps', collaps);
})();
(function () {

    var collaps = function (collapsibleHeading){
        collapsibleHeading.forEach( function(obj) {

            var thisElement = obj;

            // create unique id for a11y relationship
            var id = 'collapsible-' + Array.prototype.indexOf.call(collapsibleHeading, thisElement);

            // wrap the content and make it focusable
            thisElement.nextElementSibling
                .insertAdjacentHTML("afterend", '<div class="js-collapsible-content collapsible-content" id="' + id + '" aria-hidden="true"></div>');

            var fragment = document.createDocumentFragment();
            fragment.appendChild(thisElement.nextElementSibling);
            thisElement.nextElementSibling.appendChild(fragment);

            var panel = thisElement.nextElementSibling;

            // Add the button inside `.js-collapsible-heading` so both the heading and button semanics are read

            thisElement.innerHTML = '<button aria-expanded="false" type="button" aria-controls="' + id + '">' + thisElement.textContent + '</button>';

            thisElement.classList.add('collapsible-heading');
            var button = thisElement.children[0];

            // Toggle the state properties
            button.addEventListener("click", function () {
                var state = this.getAttribute('aria-expanded') === 'false';
                this.setAttribute('aria-expanded', state);
                panel.setAttribute('aria-hidden', !state);
            });
        });
    };

    myApp.extend('collaps', collaps);
})();
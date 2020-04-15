/**
 * Collapsible sections
 * See https://heydon.github.io/inclusive-components-demos/collapsible-sections/progressive.html
 */

;(function () {

	// Get all the collapsible containers
	var collapseArray = Array.prototype.slice.call(document.querySelectorAll('[data-component="collapsibles"]'));

	if (collapseArray) {

		// Loop through containers
		collapseArray.forEach(function (item) {

			// Get headings inside a collapsible container
			var headingsArray = Array.prototype.slice.call(item.querySelectorAll('[data-heading="collapsibles"]'));

			// Loop through headings
			headingsArray.forEach(function (heading, index) {

				// Insert a button for opening/closing the collapsible section
				heading.innerHTML = '<button aria-expanded="false">' + heading.textContent + '<svg aria-hidden="true" focusable="false" viewBox="0 0 10 10"><rect class="vert" height="8" width="2" y="1" x="4" /><rect height="2" width="8" y="4" x="1" /></svg></button>';

				// Add appropriate aria role to the collapsible section
				heading.nextElementSibling.setAttribute('aria-hidden', 'true');

				// Assign the button
				var btn = heading.querySelector('button');

				// Add click event listener
				btn.addEventListener('click', function(event){

					// Cast the state as a boolean
					var expanded = btn.getAttribute('aria-expanded') === 'true';

					// Switch the state
					btn.setAttribute('aria-expanded', !expanded);

					// Switch the collapsible section's visibility
					heading.nextElementSibling.setAttribute('aria-hidden', expanded);

				});

			}); // End loop

		}); // End loop

	} // End if statement

})();
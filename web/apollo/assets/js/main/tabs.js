/**
 * Tabbed sections
 * See https://heydon.github.io/inclusive-components-demos/tab-interface/true-tabbed-interface.html
 */

;(function () {

	// Get all the tabbed containers
	var tabsArray = Array.prototype.slice.call(document.querySelectorAll('[data-component="tabs"]'));

	if (tabsArray) {

		// Loop through containers
		tabsArray.forEach(function (item) {

			// Get the first list inside a tabbed container
			var tablist = item.querySelector('ul');

			// Get the links in that list
			var tabsArray = Array.prototype.slice.call(tablist.querySelectorAll('a'));

			// Get the sections inside a tabbed container
			var panelsArray = Array.prototype.slice.call(item.querySelectorAll('[id^="section"]'));

			// Function for switching between tabs
			var switchTab = function switchTab(oldTab, newTab) {
				newTab.focus();

				// Make the active tab focusable by the user via the Tab key
				newTab.removeAttribute('tabindex');

				// Set the selected state
				newTab.setAttribute('aria-selected', 'true');
				oldTab.removeAttribute('aria-selected');
				oldTab.setAttribute('tabindex', '-1');

				// Get the index of the new and old tabs to find the correct tab panels to show/hide
				var index = Array.prototype.indexOf.call(tabsArray, newTab);
				var oldIndex = Array.prototype.indexOf.call(tabsArray, oldTab);
				panelsArray[oldIndex].hidden = true;
				panelsArray[index].hidden = false;
			};

			// Add the tablist ARIA role
			tablist.setAttribute('role', 'tablist');

			// Loop through the 'tabs'
			tabsArray.forEach( function (tab, index) {

				// Add semantics, remove user focusability for each tab
				tab.setAttribute('role', 'tab');
				tab.setAttribute('id', 'tab' + (index + 1));
				tab.setAttribute('tabindex', '-1');
				tab.parentNode.setAttribute('role', 'presentation');

				// Handle clicking of tabs for mouse users
				tab.addEventListener('click', function(event) {
					event.preventDefault();
					var currentTab = tablist.querySelector('[aria-selected');
					if (event.currentTarget !== currentTab) {
						switchTab(currentTab, event.currentTarget);
					}
				});

				// Handle keydown events for keyboard users
				tab.addEventListener('keydown', function(event) {

					// Get the index of the current tab in the tabsArray
					var index = Array.prototype.indexOf.call(tabsArray, event.currentTarget);

					// Determine which arrow key pressed
					var direction = event.key === 'ArrowLeft' ? index - 1 : event.key === 'ArrowRight' ? index + 1 : null;
					// Switch to the new tab if it exists
					if (direction !== null) {
						event.preventDefault();

						// Find correct tab to focus
						var newIndex;
						if (tabsArray[direction]) {
							newIndex = direction;
						} else {
							// Loop around if adjacent tab doesn't exist
							newIndex = direction === index - 1 ? tabsArray.length - 1 : 0;
						}
						switchTab(event.currentTarget, tabsArray[newIndex]);
						tabsArray[newIndex].focus();
					}
				});

			}); // End loop

			// Loop through the 'panels' and add semantics, hide them all
			panelsArray.forEach(function (panel, index) {

				panel.setAttribute('role', 'tabpanel');
				panel.setAttribute('tabindex', '-1');
				panel.setAttribute('aria-labelledby', tabsArray[index].id);
				panel.hidden = true;

			}); // End loop

			// Initially activate the first tab and reveal the first panel
			tabsArray[0].removeAttribute('tabindex');
			tabsArray[0].setAttribute('aria-selected', 'true');
			panelsArray[0].hidden = false;

		}); // End loop

	} // End if statement

})();
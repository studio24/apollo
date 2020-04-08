/**
 * Sticky headers enhancement for tables
 * Loosely based on https://bbc.github.io/gel/components/data-tables/
 */

var stickyColumnHead = function () {

	// Check if `position: sticky;` is supported
	document.documentElement.style['position'] = 'sticky';
	if (document.documentElement.style['position'] === 'sticky') {

		// Get all the table wraps
		var tablesArray = Array.prototype.slice.call(document.querySelectorAll('.table-wrap'));
		if (tablesArray) {

			// Loop through them
			tablesArray.forEach(function (item) {

				// Get the parent element of the table wrap, and it's width
				var container = item.parentElement;
				var containerWidth = parseInt(window.getComputedStyle(container, null).getPropertyValue("width"), 10);

				// Get the table inside the table wrap, and it's width
				var table = item.firstElementChild;
				var tableWidth = parseInt(window.getComputedStyle(table, null).getPropertyValue("width"), 10);

				// Comparison: true if the container is wider than the table
				var noScroll = containerWidth >= tableWidth;

				// Only make the container focusable if it needs scrolling
				item.tabIndex = noScroll ? -1 : 0;

				// Activate sticky headers for non-scrolling tables
				item.style.overflowX = noScroll ? 'visible' : 'auto';
				table.querySelector('thead').classList.toggle('js-sticky', noScroll);

			}); // End loop

		} // End if statement

	} // End if statement
};

stickyColumnHead();

// Tie the stickyTableHead function to a resize event, and debounce for performance
var timeout;

window.addEventListener('resize', function (event) {

	// If timer is null, reset it to 66ms and run desired functions.
	// Otherwise, wait until timer is cleared
	if (!timeout) {
		timeout = setTimeout(function () {

			// Reset timeout
			timeout = null;

			// Run our resize functions
			stickyColumnHead();

		}, 66);
	}

}, false);
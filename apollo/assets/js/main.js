//@todo: minify and combine JS files in the main directory into this script, intended to run on most/all pages

import {stickyColumnHead} from "./main/tableheaders";
import {collapsibles} from "./main/collapsibles";

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
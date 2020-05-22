<!doctype html>
<html lang="en" class="no-js">

<head>

    <?php // Charset: Must be in first 1024 bytes of the document and before title  ?>
    <meta charset="utf-8">

    <?php // Title: To avoid a potential encoding-related security issue in IE  ?>
    <title>Apollo</title>

    <?php // Compatibility: https://msdn.microsoft.com/en-us/library/cc288325.aspx  ?>
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <?php // Description: The description meta tag provides a short description of the page (Including Open Graph support which needs to be before name attribute)  ?>
    <meta property="og:description" name="description" content="The living content- and style guide for Studio 24 by Studio 24."/>

    <?php // Viewport:  Make it zoomable ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php // Add a `js` class to the HTML element to help avoid Flash Of Unstyled Content (FOUC) ?>
    <?php // We target the HTML element because WordPress already adds lots of classes to `body` ?>
    <script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>

    <?php // Font Face Observer script to check when web fonts are loaded before applying them via CSS ?>
    <?php // Refer to https://github.com/bramstein/fontfaceobserver ?>
    <?php require_once('../_includes/scripts__header.html'); ?>

    <?php // Styles ?>
    <?php require_once('../_includes/styles.php') ?>

    <?php // Open Graph tags (description is included below standard title ?>
    <?php // https://developers.facebook.com/tools/debug/sharing/ ?>
    <?php // https://cards-dev.twitter.com/validator ?>
    <meta property="og:url" content="http://apollo.s24.net/"/>
    <meta property="og:image" content="http://apollo.s24.net/dist/assets/images/apollo.png"/>

    <?php // Duplicate the standard title tag because Twitter doesn't understand it ?>
    <meta property="og:title" content="Apollo"/>
    <?php // Replace `summary_large_image` with `summary` for a smaller Twitter card ?>
    <meta name="twitter:card" content="summary_large_image"/>

</head>



<body>

<div class="wrap">

    <main>
	    <h1>Data tables</h1>
	    <p>The examples on this page show the required markup for accessible data tables. The key points are:</p>
	    <ul>
		    <li>The table must include column and/or row headers (<code>&lt;th&gt;</code>) to be a true data table. Some screen readers that encounter a table without headers will treat it as a &#8216;layout table&#8217; and communicate it quite differently.</li>
		    <li>Use the <code>scope</code> attribute to differentiate between column and row headers.</li>
		    <li>Where there are both column and row headers, do not leave the first header cell empty as this can produce unexpected behaviour.</li>
		    <li>Use the table <code>&lt;caption&gt;</code> to directly associate a data table with its heading.</li>
		    <li>The grid structure of data tables must remain intact, no matter the available space. For tables with a lot of columns this may result in horizontal scrolling.
			    <ul>
				    <li>To control this behaviour, each table is wrapped in a div with the class <code>.table-wrap</code>.</li>
				    <li><code>&lt;tabindex="0"&gt;</code> is added to the wrapper to make it focusable and make it scrollable for keyboard users. For the benefit of screen reader users, we give the wrapper the <code>&lt;group&gt;</code> role and use <code>aria-labelledby</code> to associate it with the table caption for labelling.</li>
				    <li>A JavaScript enhancement checks whether there is any overflow and - if there is none - updates the tabindex to remove focus.</li>
				    <li>The CSS applies an indicative shadow/fade to whichever side the overflow is occurring at, providing additional visual affordance that a table is scrollable.</li>
				    <li>The JavaScript enhancement also applies <code>&lt;position: sticky;&gt;</code> to column headers if there is no horizontal overflow, which is useful for tables with many rows of data.</li>
			    </ul>
		    </li>
	    </ul>
	    <h2>Simple table (column headers only)</h2>
	    <div class="table-wrap" role="group" aria-labelledby="unique-caption-id-1" tabindex="0">
		    <table>
			    <caption id="unique-caption-id-1">
				    <h3>Members of the Spice Girls</h3>
			    </caption>
			    <thead>
			    <tr>
				    <th>First name</th>
				    <th>Last name</th>
				    <th>Band name</th>
				    <th>Date of birth</th>
				    <th>Place of birth</th>
			    </tr>
			    </thead>
			    <tbody>
			    <tr>
				    <td>Emma</td>
				    <td>Bunton</td>
				    <td>Baby</td>
				    <td>21 January 1976</td>
				    <td>Watford</td>
			    </tr>
			    <tr>
				    <td>Geri</td>
				    <td>Halliwell</td>
				    <td>Ginger</td>
				    <td>6 August 1972</td>
				    <td>London</td>
			    </tr>
			    <tr>
				    <td>Victoria</td>
				    <td>Beckham</td>
				    <td>Posh</td>
				    <td>17 April 1974</td>
				    <td>Harlow</td>
			    </tr>
			    <tr>
				    <td>Melanie</td>
				    <td>Brown</td>
				    <td>Scary</td>
				    <td>29 May 1975</td>
				    <td>Leeds</td>
			    </tr>
			    <tr>
				    <td>Melanie</td>
				    <td>Chisholm</td>
				    <td>Sporty</td>
				    <td>12 January 1974</td>
				    <td>Whiston</td>
			    </tr>
			    </tbody>
		    </table>
	    </div>

	    <h2>Table with column headers and row headers</h2>
        <div class="table-wrap" role="group" aria-labelledby="unique-caption-id-2" tabindex="0">
            <table>
                <caption id="unique-caption-id-2">
                    <h3>Spice Girls' housekeeping rota</h3>
                </caption>
                <thead>
                    <tr>
                        <th scope="col">Day</th>
                        <th scope="col">Baby</th>
                        <th scope="col">Ginger</th>
                        <th scope="col">Posh</th>
                        <th scope="col">Scary</th>
                        <th scope="col">Sporty</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Monday</th>
                        <td>Washing up</td>
                        <td>Cooking</td>
                        <td>Shopping</td>
                        <td>Dusting</td>
                        <td>Vacuuming</td>
                    </tr>
                    <tr>
                        <th scope="row">Tuesday</th>
                        <td>Vacuuming</td>
                        <td>Washing up</td>
                        <td>Cooking</td>
                        <td>Shopping</td>
                        <td>Dusting</td>
                    </tr>
                    <tr>
                        <th scope="row">Wednesday</th>
                        <td>Dusting</td>
                        <td>Vacuuming</td>
                        <td>Washing up</td>
                        <td>Cooking</td>
                        <td>Shopping</td>
                    </tr>
                    <tr>
                        <th scope="row">Thursday</th>
                        <td>Shopping</td>
                        <td>Dusting</td>
                        <td>Vacuuming</td>
                        <td>Washing up</td>
                        <td>Cooking</td>
                    </tr>
                    <tr>
                        <th scope="row">Friday</th>
                        <td>Cooking</td>
                        <td>Shopping</td>
                        <td>Dusting</td>
                        <td>Vacuuming</td>
                        <td>Washing up</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

</div>
<footer class="global-footer">
	Footer content goes here
</footer>

<script>
	var stickyColumnHead = function () {
		// Check if `position: sticky;` is supported
		document.documentElement.style['position'] = 'sticky';
		if (document.documentElement.style['position'] === 'sticky') {
			// Get all the table wraps
			var tablesArray = Array.prototype.slice.call(document.querySelectorAll('.table-wrap'));
			if (tablesArray) {
				// Loop through them
				tablesArray.forEach(function (item, index) {
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
				});
			}
		}
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
</script>

<?php require_once('../_includes/scripts__footer.html'); ?>

</body>
</html>
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
        <h1>Collapsible sections or "Collapsibles"</h1>

        <p>We insert buttons via JavaScript for opening and closing collapsible sections. We use the data attribute <code>data-component="collapsibles"</code> as a hook for our JavaScript, as this keeps things nicely separated from classes, which could more easily be overwritten.</p>
        <p><a href="https://adamsilver.io/articles/buttons-shouldnt-have-a-hand-cursor/">Buttons shouldn't use the pointer cursor</a>, so we need to ensure the buttons have sufficient affordance by other means, such as background colour, border and/or box-shadow styles.</p>

        <div class="component--collapsibles" data-component="collapsibles">
            <h2 data-heading="collapsibles">Baby Spice</h2>
            <div>
                <h3>RPG stats</h3>
                <ul>
                    <li>Strength: 10</li>
                    <li>Dexterity: 14</li>
                    <li>Looks: 16</li>
                    <li>Macho: 10</li>
                    <li>Health: 8</li>
                </ul>
            </div>
            <h2 data-heading="collapsibles">Ginger Spice</h2>
            <div>
                <h3>RPG stats</h3>
                <ul>
                    <li>Strength: 10</li>
                    <li>Dexterity: 9</li>
                    <li>Looks: 16</li>
                    <li>Macho: 14</li>
                    <li>Health: 10</li>
                </ul>
            </div>
            <h2 data-heading="collapsibles">Posh Spice</h2>
            <div>
                <h3>RPG stats</h3>
                <ul>
                    <li>Strength: 10</li>
                    <li>Dexterity: 14</li>
                    <li>Looks: 14</li>
                    <li>Macho: 12</li>
                    <li>Health: 10</li>
                </ul>
            </div>
            <h2 data-heading="collapsibles">Scary Spice</h2>
            <div>
                <h3>RPG stats</h3>
                <ul>
                    <li>Strength: 10</li>
                    <li>Dexterity: 12</li>
                    <li>Looks: 12</li>
                    <li>Macho: 16</li>
                    <li>Health: 10</li>
                </ul>
            </div>
            <h2 data-heading="collapsibles">Sporty Spice</h2>
            <div>
                <h3>RPG stats</h3>
                <ul>
                    <li>Strength: 13</li>
                    <li>Dexterity: 14</li>
                    <li>Looks: 10</li>
                    <li>Macho: 10</li>
                    <li>Health: 12</li>
                </ul>
            </div>
        </div>
    </main>

</div>
<footer class="global-footer">
	Footer content goes here
</footer>


<?php require_once('../_includes/scripts__footer.html'); ?>

<script>
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
</script>

</body>
</html>
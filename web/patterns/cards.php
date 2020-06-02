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

	<style>
		.l-switcher > * > * {
			min-width: 25%;
		}

		.sidebar .card {
			height: auto;
			width: 100%;
		}
	</style>



</head>



<body>

<div class="wrap">
    <?php // Start main ?>
    <main>
        <h1>Cards</h1>
	    <h2>Basic card</h2>
	    <ul>
		    <li>The basic card consists of an image area (using the <a href="../layouts/frame.php">frame layout</a>), and a content area (using the <a href="../layouts/box.php">box layout</a>). If the image is purely decorative, an empty <code>alt</code> attribute should be provided.</li>
		    <li>The content area appears first in the source order, so that the card is correctly labelled by its heading. We use flexbox to visually put the image ahead of the content area.</li>
		    <li>Make sure that the heading element fits with the heading order of surrounding content. Headings with an equal or higher rank start a new section, headings with a lower rank start new subsections that are part of the higher ranked section.</li>
	    </ul>
	    <div class="l-sidebar">
		    <div>
			    <div class="not-sidebar">
				    <ul>
					    <li>We want the entire card to act as a link:
						    <ul>
							    <li>Avoid wrapping the card in a link. This can result in the entire contents of the card being read out to screen reader users.</li>
							    <li>Avoid wrapping the image in a link and repeating that link elsewhere within the card. This results in unnecessary tab stops and duplicated links.</li>
							    <li>It makes sense to use the heading text as the link for our card. It is unique and descriptive. Add the link inside the heading.</li>
							    <li>To make the link span the entire card, we apply <code>position: relative;</code> to the card and <code>position: absolute;</code> to the link's <code>::after</code> pseudo element.</li>
							    <li>Link affordance is provided by the <code>pointer</code> cursor style. We add a <code>:hover</code> style for further affordance.</li>
						    </ul>
					    </li>
				    </ul>
			    </div>
			    <div class="sidebar">
				    <article class="card">
					    <div class="l-box l-box--no-border card__text">
						    <h3 class="card__heading"><a class="card__link" href="https://www.studio24.net">My card title</a></h3>
						    <p>Here is all the descriptive teaser text for my card.</p>
					    </div>
					    <div class="l-frame l-frame--16-9 card__image">
						    <img src="/dist/assets/images/steve-johnson--zASKXkwkIY-unsplash.jpg" alt>
					    </div>
				    </article>
			    </div>
		    </div>
	    </div>

	    <h2>Card with a call to action</h2>
	    <div class="l-sidebar">
		    <div>
			    <div class="not-sidebar">
				    <ul>
					    <li>This variation of the basic card includes a visual call to action (<abbr>CTA</abbr>), without adding an unhelpful and generic "Read more" link.</li>
					    <li>The <abbr>CTA</abbr> is hidden from assistive technologies using the <code>aria-hidden</code> attribute.</li>
					    <li>For sighted screen reader users, we attach &lsquo;Read more&rsquo; to the link with <code>aria-describedby</code> in conjunction with a unique ID on the <abbr>CTA</abbr>. This description is always announced after the link text.</li>
					    <li>The content area has a flexbox context with <code>flex-direction: column;</code> courtesy of the stack mixin which creates vertical spacing between sibling elements. This enables us to apply <code>margin-top: auto;</code> to the <abbr>CTA</abbr> to align it to the bottom of the card, which looks more attractive in a list of cards.</li>
				    </ul>
			    </div>
			    <div class="sidebar">
				    <article class="card card--cta">
					    <div class="l-box l-box--no-border card__text">
						    <h3 class="card__heading"><a class="card__link" href="https://www.studio24.net" aria-describedby="unique-card-title-2">Unique card title</a></h3>
						    <p>Here is all the descriptive teaser text for my card.</p>
						    <span class="button card__cta" aria-hidden="true" id="unique-card-title-2">Read more</span>
					    </div>
					    <div class="l-frame l-frame--16-9 card__image">
						    <img src="/dist/assets/images/steve-johnson--zASKXkwkIY-unsplash.jpg" alt>
					    </div>
				    </article>
			    </div>
		    </div>
	    </div>
        <div class="l-switcher">
            <ul class="clean-list">
	            <li>
		            <article class="card card--cta">
		                <div class="l-box l-box--no-border card__text">
			                <h3 class="card__heading"><a class="card__link" href="https://www.studio24.net" aria-describedby="unique-card-title-1">Unique card title 1</a></h3>
		                    <p>Here is all the descriptive teaser text for my card.</p>
			                <span class="button card__cta" aria-hidden="true" id="unique-card-title-1">Read more</span>
		                </div>
			            <div class="l-frame l-frame--16-9 card__image">
				            <img src="/dist/assets/images/steve-johnson--zASKXkwkIY-unsplash.jpg" alt>
			            </div>
		            </article>
	            </li>
	            <li>
		            <article class="card card--cta">
			            <div class="l-box l-box--no-border card__text">
				            <h3 class="card__heading"><a class="card__link" href="https://www.studio24.net" aria-describedby="unique-card-title-2">Unique card title 2</a></h3>
				            <p>Here is all the descriptive teaser text for my card. But this one has significantly more text content inside it.</p>
				            <span class="button card__cta" aria-hidden="true" id="unique-card-title-2">Read more</span>
			            </div>
			            <div class="l-frame l-frame--16-9 card__image">
				            <img src="/dist/assets/images/steve-johnson--zASKXkwkIY-unsplash.jpg" alt>
			            </div>
		            </article>
	            </li>
	            <li>
		            <article class="card card--cta">
			            <div class="l-box l-box--no-border card__text">
				            <h3 class="card__heading"><a class="card__link" href="https://www.studio24.net" aria-describedby="unique-card-title-3">Unique card title 3 is a bit longer</a></h3>
				            <p>Here is all the descriptive teaser text for my card.</p>
				            <span class="button card__cta" aria-hidden="true" id="unique-card-title-3">Read more</span>
			            </div>
			            <div class="l-frame l-frame--16-9 card__image">
				            <img src="/dist/assets/images/steve-johnson--zASKXkwkIY-unsplash.jpg" alt>
			            </div>
		            </article>
	            </li>
	            <li>
		            <article class="card card--cta">
			            <div class="l-box l-box--no-border card__text">
				            <h3 class="card__heading"><a class="card__link" href="https://www.studio24.net" aria-describedby="unique-card-title-4">Unique card title 4</a></h3>
				            <p>Here is all the descriptive teaser text for my card.</p>
				            <span class="button card__cta" aria-hidden="true" id="unique-card-title-4">Read more</span>
			            </div>
			            <div class="l-frame l-frame--16-9 card__image">
				            <img src="/dist/assets/images/steve-johnson--zASKXkwkIY-unsplash.jpg" alt>
			            </div>
		            </article>
	            </li>
            </ul>
        </div>

	    <h2>Card with extra links</h2>
	    <div class="l-sidebar">
		    <div>
			    <div class="not-sidebar">
				    <ul>
					    <li>Sometimes we need to include additional links e.g. for category indexes or author attributions.</li>
					    <li>By giving such links <code>position: relative;</code> and <code>z-index: 10;</code> we can raise them above the level of the card link and provide access to users.</li>
					    <li>In this example, tags are included using a modification of the <a href="../layouts/cluster.php">cluster layout</a></li>
				    </ul>
			    </div>
			    <div class="sidebar">
				    <article class="card card--cta">
					    <div class="l-box l-box--no-border card__text">
						    <h3 class="card__heading"><a class="card__link" href="https://www.studio24.net" aria-describedby="another-card-title-1">Another card title 1</a></h3>
						    <div class="l-cluster">
							    <h4 class="visuallyhidden">Categories</h4>
							    <ul class="clean-list tag-list">
								    <li>
									    <a href="https://www.studio24.net/work-sector/arts-and-culture/" class="tag">Arts and culture</a>
								    </li>
								    <li>
									    <a href="https://www.studio24.net/work-sector/education/" class="tag">Education</a>
								    </li>
								    <li>
									    <a href="https://www.studio24.net/work-sector/charity-and-not-for-profit/" class="tag">Charity and not-for-profit</a>
								    </li>
							    </ul>
						    </div>
						    <p>Here is all the descriptive teaser text for my card.</p>
						    <span class="button card__cta" aria-hidden="true" id="another-card-title-1">Read more</span>
					    </div>
					    <div class="l-frame l-frame--16-9 card__image">
						    <img src="/dist/assets/images/steve-johnson--zASKXkwkIY-unsplash.jpg" alt>
					    </div>
				    </article>
			    </div>
		    </div>
	    </div>

	    <h2>Horizontal card</h2>
	    <p>Horizontal cards use a slightly modified structure, with an inner container added to the text area to centre it vertically. They use a similar mechanism to the <a href="../layouts/sidebar.php">sidebar layout</a>, to switch from vertical to horizontal alignment without a media query.
	    </p>
	    <article class="card card--horizontal card--cta">
		    <div class="l-box l-box--no-border card__text">
			    <div class="card__text__inner">
			        <h3 class="card__heading"><a class="card__link" href="https://www.studio24.net" aria-describedby="unique-card-title-4">Unique card title 4</a></h3>
			        <p>Here is all the descriptive teaser text for my card.</p>
			        <span class="button card__cta" aria-hidden="true" id="unique-card-title-4">Read more</span>
			    </div>
		    </div>
		    <div class="l-frame l-frame--16-9 card__image">
			    <img src="/dist/assets/images/steve-johnson--zASKXkwkIY-unsplash.jpg" alt>
		    </div>
	    </article>

	    <h2>Image credit</h2>
	    <p>Photo by <a href="https://unsplash.com/photos/-zASKXkwkIY">Steve Johnson</a> on <a href="https://unsplash.com/">Unsplash</a></p>

    </main>
    <?php // End main ?>
</div>
<footer class="global-footer">
	Footer content goes here
</footer>



<?php require_once('../_includes/scripts__footer.html'); ?>

</body>
</html>

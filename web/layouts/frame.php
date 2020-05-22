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
    <?php // Start main ?>
    <main>

        <h1>Layout: Frame</h1>

        <div class="l-sidebar">
            <div>
                <div class="not-sidebar">
                    <p>The frame layout is useful for cropping media (images and video) to a specific aspect ratio. It uses percentage padding to create a frame with a set aspect ratio (because padding is always based on the width of an element), which then acts as a window onto the content inside.</p>
                    <p>It is not recommended to apply the <code>.l-frame</code> class to the <code>figure</code> element, as this will obscure the <code>figcaption</code> if used. Instead, place it on an inner <code>picture</code> or <code>div</code> element.</p>
                    <p>Because <code>.l-frame</code> has a Flexbox context, we use <code>align-items: center;</code> and <code>justify-content: center;</code> to centre the child item both vertically and horizontally.</p>
                    <h2>Internet Explorer/Edge considerations</h2>
                    <p>The default frame layout uses <code>object-fit: cover</code> for images and videos. This is not supported in Internet Explorer or Edge prior to version 16 and in Edge 16-18 it is only supported on images. However, the Chromium Edge browser, which does support object-fit, is now available to systems as far back as Windows 7.</p>
                    <p>For images, a simple JavaScript workaround is available that swaps the image for a background-image instead, although this removes the accessibility benefits offered by images. Alternatively, you may prefer to forgo <code>object-fit</code> and adapt your instance of the frame to rely on absolute positioning and hiding any overflow.</p>
                    <h2>Image credit</h2>
                    <p>Photo by <a href="https://unsplash.com/photos/-zASKXkwkIY">Steve Johnson</a> on <a href="https://unsplash.com/">Unsplash</a></p>
                </div>
                <div class="sidebar">
                    <figure>
                        <div class="l-frame l-frame--16-9">
                            <img src="/dist/assets/images/steve-johnson--zASKXkwkIY-unsplash.jpg" alt="Multicoloured abstract painting" />
                        </div>
                        <figcaption>16:9 frame uses the class <code>.l-frame--16-9</code></figcaption>
                    </figure>

                    <figure>
                        <div class="l-frame l-frame--3-2">
                            <img src="/dist/assets/images/steve-johnson--zASKXkwkIY-unsplash.jpg" alt="Multicoloured abstract painting" />
                        </div>
                        <figcaption>3:2 frame uses the class <code>.l-frame--3-2</code></figcaption>
                    </figure>

                    <figure>
                        <div class="l-frame l-frame--4-3">
                            <img src="/dist/assets/images/steve-johnson--zASKXkwkIY-unsplash.jpg" alt="Multicoloured abstract painting" />
                        </div>
                        <figcaption>4:3 frame uses the class <code>.l-frame--4-3</code></figcaption>
                    </figure>

                    <figure>
                        <div class="l-frame l-frame--square">
                            <img src="/dist/assets/images/steve-johnson--zASKXkwkIY-unsplash.jpg" alt="Multicoloured abstract painting" />
                        </div>
                        <figcaption>Square frame uses the class <code>.l-frame--square</code></figcaption>
                    </figure>

                </div>
            </div>
        </div>
    </main>
    <?php // End main ?>
</div>
<footer class="global-footer">
	Footer content goes here
</footer>



<?php require_once('../_includes/scripts__footer.html'); ?>

</body>
</html>
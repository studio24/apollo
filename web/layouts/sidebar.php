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
        .l-box {
            background:
                linear-gradient(#7fdbff, #7fdbff) content-box,
                linear-gradient(#b10dc9, #b10dc9) padding-box;
        }

        .l-sidebar {
            background: #ffdc00;
        }

        .ex1 .not-sidebar,
        .ex1 .sidebar,
        .ex3 .not-sidebar,
        .ex3 .sidebar {
            background:
                linear-gradient(#7fdbff, #7fdbff) content-box;
        }

        .ex3 .not-sidebar {
            order: 1;
        }
    </style>

</head>



<body>

<div class="wrap">
    <?php // Start main ?>
    <main>
        <h1>Layout: Sidebar</h1>
        <p>The sidebar layout creates a container, inside of which a larger panel can sit next to a smaller (sidebar) panel.</p>
        <p>The two panels stack vertically, until there is enough horizontal space for them to sit alongside each other. The point at which this change happens is determined by setting a <code>flex-basis</code> on the sidebar panel and a <code>min-width</code> on the larger panel. No viewport media queries required, so it will nest nicely inside of other containers.</p>

        <div class="l-sidebar ex1">
            <div>
                <div class="not-sidebar">
                    <h2>Larger content panel</h2>
                    <p>Notice that there is no spacing between the content and its container. If we were to use padding to achieve this, it would cause the flexbox layout to break.</p>
                </div>
                <div class="sidebar">
                    <h2>Smaller sidebar panel</h2>
                    <p>Notice that there is no spacing between the content and its container. If we were to use padding to achieve this, it would cause the flexbox layout to break.</p>
                </div>
            </div>
        </div>

        <div class="l-sidebar ex2">
            <div>
                <div class="not-sidebar">
                    <div class="l-box l-box--no-border">
                        <h2>Box layout</h2>
                        <p>This allows us to space the sidebar content away from the container edges.</p>
                    </div>
                </div>
                <div class="sidebar">
                    <div class="l-box l-box--no-border">
                        <h2>Box layout</h2>
                        <p>This allows us to space the sidebar content away from the container edges.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="l-sidebar ex3">
            <div>
                <div class="not-sidebar">
                    <h2>Larger content panel</h2>
                    <p>Something looks different here.</p>
                </div>
                <div class="sidebar">
                    <h2>Smaller sidebar panel</h2>
                    <p>Thanks to Flexbox, we can use the <code>order</code> property to specify whether the sidebar should sit visually on the left or the right without having to adjust the source order.</p>
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
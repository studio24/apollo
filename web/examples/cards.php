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
    <?php require_once( '../delete-this-folder-in-wp/_includes/scripts__header.html' ); ?>

    <?php // Styles ?>
    <link rel="stylesheet" href="/dist/assets/styles/styles.min.css" type="text/css" media="screen"/>

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
        .card-list {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            list-style: none;
        }

        .card-list li {
            max-width:100%;
            min-width:50%;
            width: calc(480px * 480 - 100% * 480);
        }

        .card-list-wrap {
           overflow: hidden;
        }

        ul {
            margin: 0 -20px -20px 0;
        }

        li {
            background-clip: padding-box;
            background-color: #ccc;
            border: 0 solid transparent;
            border-width: 0 20px 20px 0;
        }
    </style>

</head>



<body>

<div class="wrap">
    <?php // Start main ?>
    <main class="l-center">
        <h1>Example: Cards</h1>
        <div class="card-list-wrap">
            <ul class="card-list">
            <li>
                <div class="l-frame l-frame--16-9">
                    <img src="/dist/assets/images/sherlock.jpg" alt="Sherlock Holmes and Dr Watson having a discussion in a train carriage.">
                </div>
                <div class="l-box l-box--no-border">
                    <h2>This is my card title</h2>
                    <p>Here is all the descriptive teaser text for my card.</p>
                </div>
            </li>
            <li>
                <div class="l-frame l-frame--16-9">
                    <img src="/dist/assets/images/sherlock.jpg" alt="Sherlock Holmes and Dr Watson having a discussion in a train carriage.">
                </div>
                <div class="l-box l-box--no-border">
                    <h2>This is my card title</h2>
                    <p>Here is all the descriptive teaser text for my card.</p>
                </div>
            </li>
            <li>
                <div class="l-frame l-frame--16-9">
                    <img src="/dist/assets/images/sherlock.jpg" alt="Sherlock Holmes and Dr Watson having a discussion in a train carriage.">
                </div>
                <div class="l-box l-box--no-border">
                    <h2>This is my card title</h2>
                    <p>Here is all the descriptive teaser text for my card.</p>
                </div>
            </li>
            <li>
                <div class="l-frame l-frame--16-9">
                    <img src="/dist/assets/images/sherlock.jpg" alt="Sherlock Holmes and Dr Watson having a discussion in a train carriage.">
                </div>
                <div class="l-box l-box--no-border">
                    <h2>This is my card title</h2>
                    <p>Here is all the descriptive teaser text for my card.</p>
                </div>
            </li>
        </ul>
        </div>
    </main>
    <?php // End main ?>
</div>
<div class="global-footer">
    Footer content goes here
</div>



<?php require_once( '../delete-this-folder-in-wp/_includes/scripts__footer.html' ); ?>

</body>
</html>

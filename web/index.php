<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once (__DIR__ . '/functions.php');

$componentStructureArray = buildComponentStructureArray(__DIR__ . '/components');

?>

	<!doctype html>
	<html lang="en" class="no-js">

	<head>
		<?php // Charset: Must be in first 1024 bytes of the document  ?>
		<meta charset="utf-8">
		<?php // Title: To avoid a potential encoding-related security issue in IE  ?>
		<title>Apollo</title>
		<?php // Compatibility: https://msdn.microsoft.com/en-us/library/cc288325.aspx  ?>
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<?php // Description: The description meta tag provides a short description of the page (Including Open Graph support)  ?>
		<meta property="og:description" name="description" content="The living content- and style guide for Studio 24 by Studio 24."/>
		<?php // Viewport:  Make it zommable ya'll  ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php // Manifest: Web manifest for a richer websites (PWAs)  ?>
		<link rel="manifest" href="site.webmanifest">

		<?php // The only script we want (avoids FOUC)  ?>
		<script>(function (H) {
                H.className = H.className.replace(/\bno-js\b/, 'js')
            })(document.documentElement)</script>


		<?php // Canonical: Even though this page is different, treat this href as the Primary page instead  ?>
		<link rel="canonical" href="https://moz.com/learn/seo/canonicalization">


		<?php // DNS-prefetch: Resolve DNS  ?>
		<link rel="dns-prefetch" href="//domain.com">

		<?php // Preconnect: Resolve DNS, TCP handshake and optional TLS negotiation  ?>
		<link rel="preconnect" href="//domain.com">

		<?php // Prefetch: assets MAY be requested by the browser and stored in cache  ?>
		<link rel="prefetch" href="/image/hero.jpg" as="image">

		<?php // Prerender: load, render and paint the page (USE WITH EXTREME CAUTION)  ?>
		<link rel="prerender" href="/checkout-step-2" as="document">

		<?php // Preload: assets must be requested by the browser, must include `as` value otherwise it's treated as an XHR request (narrow browser support)  ?>
		<link rel="preload" href="/folder/name.woff2" as="font" type="font/woff2" crossorigin>


		<?php // Icons  ?>
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
		<?php // Safari pinned: Use a square single-layer SVG with transparent background, viewBox "0 0 16 16" and 100% black  ?>
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#bada55">


		<?php // Styles  ?>
		<link rel="stylesheet" href="/dist/assets/styles/styles.min.css" type="text/css" media="screen"/>


		<?php // Only used for Apollo ?>
        <link rel="stylesheet" href="/dist/assets/styles/libraries/apollo.css">
        <link rel="stylesheet" href="/dist/assets/styles/libraries/prism.css">


		<?php // Google tag manager (GTM)  ?>
		<script>(function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start':
                        new Date().getTime(), event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-XXXX');</script>


		<?php // Open Graph tags (description is included below standard title ?>
		<?php // https://developers.facebook.com/tools/debug/sharing/ ?>
		<?php // https://cards-dev.twitter.com/validator ?>
		<meta property="og:url" content="http://apollo.s24.net/"/>
		<meta property="og:image" content="http://apollo.s24.net/dist/assets/images/apollo.png"/>

		<?php // Twitter doesn't understand the standard title tag ?>
		<meta property="og:title" content="Apollo"/>
		<?php // Replace `summary_large_image` with `summary` for a smaller Twitter card ?>
		<meta name="twitter:card" content="summary_large_image"/>


	</head>

<?php //require_once( DOC_ROOT. '/delete-this-folder-in-wp/_includes/scripts__header.html' ); ?>
<?php //require_once( 'delete-this-folder-in-wp/_includes/scripts__header.html' ); ?>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript>
	<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-XXXX" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<main class="main first">

	<aside>
		<h2 class="gamma">Table of content</h2>

        <h3 class="delta">Components</h3>
		<nav>

			<?php foreach ($componentStructureArray as $component): ?>
			<a href="#components-<?php echo $component['name']; ?>"><?php echo ucfirst($component['name']); ?></a>
			<?php endforeach; ?>

		</nav>


	</aside>

	<section>

		<h1>Apollo</h1>
		<div class="lead">
			<p>The living content- and style guide for Studio 24 by <a
					href="http://studio24.net">Studio 24</a>.</p>
		</div>

		<p>Named in honour of Apollo, the Greek god of truth. This guide and
			its content serve as one single source of truth.</p>

		<p>This guide introduces and reinforces an understanding of the
			elements, components and templates that make a website through a
			shared vocabulary which is used for internal as well as client
			communcation.</p>





		<?php foreach ($componentStructureArray as $component): ?>
			<?php echo '<a href="#components-' . $component['name'] . '">' . $component['name'] . '</a>'; ?>


			<h2 class="gamma margin--triple" id="components-<?php echo $component['name']; ?>"><?php echo ucfirst($component['name']); ?></h2>

			<?php echo $component['text']; ?>

			<div class="margin--double">
				<?php echo $component['html']; ?>
            </div>

			<h3 class="delta">HTML</h3>
<pre><code class="language-html"><?php echo  $component['markup']; ?></code></pre>
		<?php endforeach; ?>

		?>


	</section>


    <script src="/dist/assets/js/libraries/prism.js"></script>

</main>

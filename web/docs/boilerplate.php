<!doctype html>
<?php // Ensure an appropriate language attribute is included and add class to avoid Flash Of Unstyled Content ?>
<html lang="en" class="no-js">

<head>

    <?php // Charset: Must be in first 1024 bytes of the document and before title ?>
    <meta charset="utf-8">

    <?php // Viewport: Make it zoomable ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <?php // Title: Provides the accessible name of the document ?>
    <title>Boilerplate Documentation</title>

    <?php // Compatibility: Force IE 8/9/10 to use its latest rendering engine ?>
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <?php // Description: A short description of the page. Open Graph support must come before the name attribute ?>
    <meta property="og:description" name="description" content="What is included in the Apollo HTML boilerplate, and why"/>

	<?php // Favicon: Suggest using https://realfavicongenerator.net/ to create icons. It will generate more than you need. For most desktop browser/versions just put the favicon.ico file in the root directory - no tag necessary. For the rest, you only need the following - put the files in the root directory. ?>
	<link rel="icon" type="image/png" sizes="192x192" href="../icon.png">
	<link rel="apple-touch-icon" href="../icon.png">
	<link rel="mask-icon" href="../safari-pinned-tab.svg" color="#00aba9">

    <?php // Adds a `js` class to the HTML element to help avoid Flash Of Unstyled Content (FOUC) ?>
    <?php // See https://www.paulirish.com/2009/avoiding-the-fouc-v3/ ?>
	<script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>

    <?php // Font Face Observer script to check when web fonts are loaded before applying them via CSS ?>
    <?php // Refer to https://github.com/bramstein/fontfaceobserver ?>
	<?php // @TODO Check if this path is alright, or whether we need to copy the file elsewhere ?>
	<script src="../../node_modules/fontfaceobserver/fontfaceobserver.js"></script>

	<script>
		var fontContent = new FontFaceObserver('Proza Libre');
		var fontHeadings = new FontFaceObserver('Playfair Display');

		Promise.all([fontContent.load(), fontHeadings.load()]).then(function () {
			document.documentElement.className += " fonts-loaded";
		});
	</script>

    <?php // Styles ?>
    <link rel="stylesheet" href="/dist/assets/styles/styles.min.css" type="text/css" media="screen"/>

    <?php // Google tag manager (GTM)  ?>
	<script>
		// Normalize doNotTrack implementations, see https://caniuse.com/#feat=do-not-track
		var DO_NOT_TRACK_ENABLED = (
			navigator.doNotTrack === '1' ||
			navigator.doNotTrack === 'yes' || // Firefox 31 and below
			navigator.msDoNotTrack === '1' || // IE 9 - 10
			window.doNotTrack === '1' // IE 11 / Edge 16 and below
		);

		// If the user has enabled 'DoNotTrack', we should not load Google Tag Manager (and therefore, Google Analytics.)
		if (!DO_NOT_TRACK_ENABLED && !window.__TESTS_RUNNING) {(
			// Start Google Tag Manager
			function(w,d,s,l,i){w[l]=w[l]||[];
			w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});
			var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','GTM-XXXX');
			// End Google Tag Manager
			}
	</script>

    <?php // Open Graph tags (description is included below standard title ?>
    <?php // https://developers.facebook.com/tools/debug/sharing/ ?>
    <?php // https://cards-dev.twitter.com/validator ?>
	<?php // https://www.linkedin.com/help/linkedin/answer/46687 ?>
	<meta property="og:title" content="Boilerplate Documentation"/>
	<meta property="og:image" content="/dist/assets/images/apollo.png"/>
    <meta property="og:url" content="http://apollo.s24.net/"/>

    <?php // Replace `summary_large_image` with `summary` for a smaller Twitter card ?>
    <meta name="twitter:card" content="summary_large_image"/>

</head>

<body>
	<?php // Google tag manager for browsers without javascript (GTM) ?>
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-XXXX" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

	<div id="top" class="wrap">
        <?php // Skip to content link ?>
		<a class="skip-link" href="#main">Skip to content</a>

        <?php // ARIA role is needed for IE11 - https://accessibility.blog.gov.uk/2016/05/27/using-navigation-landmarks/ ?>
		<header role="banner">
			Header content goes here
		</header>

        <?php // The id is used as the target for the skip to content link. ARIA role is needed for IE11 ?>
		<main id="main" role="main">

			<h1>Boilerplate documentation</h1>
			<p>This is an in-depth exploration of the <a href="../boilerplate.html">Boilerplate HTML file</a>, explaining what is included and why.</p>
			<p>Note: If you open this page in a text editor you will see lots of inline PHP comments; here we explain what's going on.</p>

			<h2>The Doctype</h2>
			<p>Always start with <code>&lt;!doctype html&gt;</code></p>

			<h2>Language declaration</h2>
			<p>The HTML element must include an appropriate language attribute. For the majority of work that we undertake <code>lang="en"</code> is likely to be sufficient. If a specific language region (e.g. <code>lang="en-US"</code> or <code>lang="en-GB"</code>) or non-English language is required, refer to the W3C's <a href="https://www.w3.org/International/questions/qa-choosing-language-tags">Choosing a Language Tag</a> for guidance.</p>

			<h2>Default no-js class</h2>
			<p>We also add <code>class="no-js"</code> to the HTML element. This will be replaced by JavaScript as part of a process to avoid a Flash Of Unstyled Content (FOUC), which we will cover later on.</p>

			<h2>The Head</h2>
			<p>The portion of an HTML document containing <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/meta">metadata</a> about that document and links to CSS and JavaScript files. The contents of the head, and the order in which they appear, are important. As explained in <a href="https://htmlhead.dev/#recommended-minimum">The Head Project</a>, <strong>charset and viewport meta tags must come first</strong> to consistently ensure proper document rendering. Any other head elements should come after these tags.</p>

			<h3>Character encoding</h3>
			<p>The first item is the charset meta tag: <code>&lt;meta charset="utf-8"&gt;</code>. This declares the page's character encoding. If left undefined, a page can be vulnerable to cross-site-scripting attacks. We put it first within the head because it must be within the first 1024 bytes of the HTML, as some browsers only look at those bytes before choosing an encoding.</p>

			<h3>Allow pinch-to-zoom</h3>
			<p>The second item is the viewport meta tag: <code>&lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;</code>. This is added to enable responsive web pages and allow users to zoom content.</p>

			<h3>Title</h3>
			<p>The title element provides an accessible name for the HTML document.</p>

			<h3>Internet Explorer compatibility</h3>
			<p>We make earlier versions of IE use its latest rendering engine with <code>&lt;meta http-equiv="x-ua-compatible" content="ie=edge"&gt;</code>, to provide a better experience for users stuck with these browsers.</p>

			<h3>Description</h3>
			<p>A concise summary of the content of the HTML document, which often appears in search engine results. To provide Open Graph support (covered in more detail below) and avoid using more tags than necessary, we include the <code>property="og:description"</code> attribute ahead of <code>name="description"</code>.</p>

			<h3>Favicons</h3>
			<p>Pretty much all desktop browsers are amply served by including an <b>.ico file</b> in the root directory. For Android and iOS, include a 192px square <b>.png file</b> that has first been optimised using a program such as <a href="https://imageoptim.com/mac">ImageOptim</a> or a website such as <a href="https://tinypng.com/">TinyPNG</a>. Safari requires a <b>.svg file</b> for its pinned tab icon.</p>
			<p>The easiest way to generate the favicon files is to use <a href="https://realfavicongenerator.net/">Favicon Generator</a>. It will create more assets than you really need, so it is recommended to only include those specified above on your project, unless you are building a progressive web app. Pop them all in the root directory to keep them together.</p>

			<h3>Avoiding a flash of unstyled content</h3>
			<p>We use Paul Irish's <a href="https://www.paulirish.com/2009/avoiding-the-fouc-v3/">Avoiding the FOUC method</a>, which uses a small piece of JavaScript to replace <code>class="no-js"</code> with <code>class="js"</code>. Using the HTML element means that the JavaScript can be included in the head, which stops us from blocking the rendering of the body content.</p>

			<h3>Avoiding a flash of invisible text</h3>
			<p>Web fonts can be large assets, so it's important that their use does not impact performance. We declare default system fonts with a fallback in our CSS, to ensure that users never experience a flash of invisible text (FOIT). Bram Stein's <a href="https://github.com/bramstein/fontfaceobserver">Font Face Observer</a> checks when web fonts are loaded and then adds <code>fonts-loaded</code> to the class list on the HTML element. Web fonts styles are scoped to this class in our CSS. As with the FOUC script, by targeting the HTML element we ensure the script is not render-blocking.</p>
			<p>To minimise the resulting visual jump from system fonts to web fonts, it's helpful to pick system fonts with similar metrics to the web fonts, using <a href="https://www.cssfontstack.com/">CSS Font Stack</a> and <a href="https://meowni.ca/font-style-matcher/">Font style matcher</a> to test the effect.</p>

			<h3>Stylesheets</h3>
			<p>Links to CSS stylesheets are next in the head.</p>

			<h3>Google Tag Manager script</h3>
			<p>The script for Google Tag Manager is next in the head.</p>

			<h3>Content appearance on social media</h3>
			<p>The final head elements allow us to control how content appears when URLs are shared on social media.</p>
			<dl>
				<dt>Facebook</dt>
				<dd><a href="https://ogp.me/">Open Graph markup</a></dd>
				<dd><a href="https://developers.facebook.com/tools/debug/">Facebook Sharing Debugger</a></dd>
				<dt>Twitter</dt>
				<dd><a href="https://developer.twitter.com/en/docs/tweets/optimize-with-cards/guides/getting-started">Getting started with cards</a></dd>
				<dd><a href="https://cards-dev.twitter.com/validator">Twitter Card Validator</a></dd>
				<dt>LinkedIn</dt>
				<dd><a href="https://www.linkedin.com/help/linkedin/answer/46687">Making your website shareable on LinkedIn</a></dd>
			</dl>

			<h2>Body</h2>
			<h3>Google Tag Manager</h3>
			<p>The first item included within the body element is a <code>noscript</code> fallback for Google Tag Manager.</p>

			<h3>Wrap container</h3>
			<p>Next we add a simple div container with <code>id="top"</code> and <code>class="wrap"</code>. This container holds <code>&lt;header&gt;</code> and <code>&lt;main&gt;</code> (and possibly other block elements, depending on your project needs) but <code>&lt;footer&gt;</code> sits outside of it. This gives us the necessary markup to create a <a href="https://css-tricks.com/couple-takes-sticky-footer/">sticky footer</a>.</p>
			<p>The id attribute provides us with a hook for any back-to-top links, if used. The class provides a hook for any CSS we may wish to apply to this container.</p>

			<h4>Skip to content link</h4>
			<p>We provide a skip to content link to allow users to easily skip past the <code>&lt;header&gt;</code>, which is repeated across multiple web pages.</p>

			<h4>The header element</h4>
			<p>To support IE11, we include the ARIA <code>role="banner"</code>.</p>

			<h4>The main element</h4>
			<p>We add <code>id="main"</code>, which is used as the <code>href</code> in the skip to content link. To support IE11, we include the ARIA <code>role="main"</code>.</p>

			<h3>The footer element</h3>
			<p>To support IE11, we include the ARIA <code>role="contentinfo"</code>.</p>

		</main>

		<?php // End main ?>

	</div>
    <?php // ARIA role is needed for IE11 ?>
	<footer class="global-footer" role="contentinfo">
		Footer content goes here
	</footer>

</body>
</html>

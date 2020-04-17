<!doctype html>
<html lang="en" class="no-js">

<head>

    <?php // Charset: Must be in first 1024 bytes of the document and before title  ?>
    <meta charset="utf-8">

    <?php // Viewport:  Make it zoomable ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php // The above 2 meta tags *must* come first in the <head> to consistently ensure proper document rendering. Any other head element should come *after* these tags. https://htmlhead.dev/#recommended-minimum ?>

    <?php // Title: To avoid a potential encoding-related security issue in IE  ?>
    <title>Apollo Boilerplate</title>

    <?php // Compatibility: Force IE 8/9/10 to use its latest rendering engine ?>
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <?php // Description: The description meta tag provides a short description of the page (Including Open Graph support which needs to be before name attribute)  ?>
    <meta property="og:description" name="description" content="HTML boilerplate file for use with Apollo"/>

	<?php // Favicon: Suggest using https://realfavicongenerator.net/ to create icons. It will generate more than you need. For most desktop browser/versions just put the favicon.ico file in the root directory - no tag necessary. For the rest, you only need the following - put the files in the root directory. ?>
	<link rel="icon" type="image/png" sizes="192x192" href="icon.png">
	<link rel="apple-touch-icon" href="icon.png">
	<link rel="mask-icon" href="safari-pinned-tab.svg" color="#00aba9">

    <?php // Add a `js` class to the HTML element to help avoid Flash Of Unstyled Content (FOUC) ?>
    <?php // We target the HTML element because WordPress already adds lots of classes to `body` ?>
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

    <?php // Open Graph tags (description is included below standard title ?>
    <?php // https://developers.facebook.com/tools/debug/sharing/ ?>
    <?php // https://cards-dev.twitter.com/validator ?>
	<?php // https://www.linkedin.com/help/linkedin/answer/46687 ?>
	<meta property="og:title" content="Apollo Boilerplate"/>
	<meta property="og:image" content="/dist/assets/images/apollo.png"/>
    <meta property="og:url" content="http://apollo.s24.net/"/>

    <?php // Replace `summary_large_image` with `summary` for a smaller Twitter card ?>
    <meta name="twitter:card" content="summary_large_image"/>

</head>

<body>

	<div class="wrap">
        <?php // Skip to content link ?>
		<a class="skip-link" href="#main">Skip to content</a>
        <?php // ARIA role is needed for IE11 - https://accessibility.blog.gov.uk/2016/05/27/using-navigation-landmarks/ ?>
		<header role="banner">
			Header content goes here
		</header>

        <?php // The id is used as the target for the skip to content link. ARIA role is needed for IE11 ?>
		<main id="main" role="main">
			<h1>Boilerplate</h1>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur quam augue, vehicula quis, tincidunt vel, varius vitae, nulla. Sed convallis orci. Duis libero orci, pretium a, <a href="#1">convallis quis</a>, pellentesque a, dolor. Curabitur vitae nisi non dolor vestibulum consequat.</p>
			<p>Duis viverra nibh a felis<sup>sup</sup> canis<sub>sub</sub> condimentum pretium. Nullam tristique lacus non purus. Donec vel felis. Etiam et sapien. Pellentesque nec quam a justo tincidunt laoreet. Aenean id enim. Donec lorem arcu, eleifend venenatis, rhoncus mollis, semper at, dui. Praesent velit tellus, adipiscing et, blandit convallis, dictum at, dui. Integer suscipit tortor in orci. Phasellus consequat. Quisque dictum convallis pede.</p>
			<p><b>Mauris viverra scelerisque mauris.</b> Nulla facilisis, elit malesuada pretium egestas, dolor arcu commodo est, at egestas massa tortor ut ante. <strong>Etiam eget libero.</strong> Aenean pretium, tellus sed sodales semper, turpis purus aliquet orci, pulvinar ornare odio tortor sit amet dui.</p>
			<p><i>Aenean id orci.</i> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus magna. <em>Mauris tincidunt iaculis enim.</em> Duis a mi vitae sapien dapibus tincidunt. Proin metus.</p>
			<p>Proin cursus, libero non auctor faucibus, urna mi vestibulum orci, sit amet fermentum nibh purus eget enim. Aenean aliquet ligula nec nulla. Praesent sit amet lorem vitae massa hendrerit auctor. Sed sit amet urna. Aenean sapien nunc, imperdiet a, pharetra in, consequat eu, neque. Phasellus vel sem gravida augue consequat tempor. Curabitur eget mauris at pede varius facilisis.</p>
			<h2>Basic image</h2>
			<img src="/dist/assets/images/steve-johnson--zASKXkwkIY-unsplash.jpg" alt="Multicoloured abstract painting" />
			<p>Morbi ut sapien. Morbi arcu mauris, suscipit congue, placerat sit amet, suscipit a, ante. Donec aliquet dui ac nunc. Mauris magna quam, aliquet quis, viverra eu, fringilla eget, purus. Donec tristique pretium sem.</p>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed eleifend urna eu sapien. Quisque posuere nunc eu massa. Praesent bibendum lorem non leo. Morbi volutpat, urna eu fermentum rutrum, ligula lacus interdum mauris, ac pulvinar libero pede a enim. Etiam commodo malesuada ante. Donec nec ligula. Curabitur mollis semper diam.</p>
			<blockquote>
				<p>Proin vestibulum. Ut ligula. Nullam sed dolor id odio volutpat pulvinar. Integer a leo. In et eros at neque pretium sagittis. Sed sodales lorem a ipsum suscipit gravida. Ut fringilla placerat arcu. Phasellus imperdiet. Mauris ac justo et turpis pharetra vulputate.</p>
				<footer>Joe Bloggs, <cite><a href="#2">Quote Source</a></cite></footer>
			</blockquote>
			<h1>Level 1 Heading</h1>
			<h2>Level 2 Heading</h2>
			<h3>Level 3 Heading</h3>
			<h4>Level 4 Heading</h4>
			<h5>Level 5 Heading</h5>
			<h6>Level 6 Heading</h6>
			<h3>An Unordered List</h3>
			<ul>
				<li>Vestibulum in mauris semper tortor interdum ultrices.</li>
				<li>Sed vel lorem et justo laoreet bibendum. Donec dictum.</li>
				<li>Etiam massa libero, lacinia at, commodo in, tincidunt a, purus.</li>
				<li>Praesent volutpat eros quis enim blandit tincidunt.</li>
				<li>Aenean eu libero nec lectus ultricies laoreet. Donec rutrum, nisi vel egestas ultrices, ipsum urna sagittis libero, vitae vestibulum dui dolor vel velit.</li>
			</ul>
			<p>Nulla sagittis convallis arcu. Sed sed nunc. Curabitur consequat. Quisque metus enim, venenatis fermentum, mollis in, porta et, nibh. Duis vulputate elit in elit. Mauris dictum libero id justo. Fusce in est. Sed nec diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque semper nibh eget nibh. Sed tempor. Fusce erat.</p>
			<h3>An Ordered List</h3>
			<ol>
				<li>Vestibulum in mauris semper tortor interdum ultrices.</li>
				<li>Sed vel lorem et justo laoreet bibendum. Donec dictum.</li>
				<li>Etiam massa libero, lacinia at, commodo in, tincidunt a, purus.</li>
				<li>Praesent volutpat eros quis enim blandit tincidunt.</li>
				<li>Aenean eu libero nec lectus ultricies laoreet. Donec rutrum, nisi vel egestas ultrices, ipsum urna sagittis libero, vitae vestibulum dui dolor vel velit.</li>
				<li>Vestibulum in mauris semper tortor interdum ultrices.</li>
				<li>Sed vel lorem et justo laoreet bibendum. Donec dictum.</li>
				<li>Etiam massa libero, lacinia at, commodo in, tincidunt a, purus.</li>
				<li>Praesent volutpat eros quis enim blandit tincidunt.</li>
				<li>Aenean eu libero nec lectus ultricies laoreet. Donec rutrum, nisi vel egestas ultrices, ipsum urna sagittis libero, vitae vestibulum dui dolor vel velit.</li>
			</ol>
			<p>Vivamus semper auctor turpis. Sed ipsum lacus, varius quis, iaculis at, mollis sagittis, arcu.</p>


		</main>
		<?php // End main ?>

	</div>
    <?php // ARIA role is needed for IE11 ?>
	<footer class="global-footer" role="contentinfo">
		Footer content goes here
	</footer>

<?php require_once( 'delete-this-folder-in-wp/_includes/scripts__footer.html' ); ?>

</body>
</html>

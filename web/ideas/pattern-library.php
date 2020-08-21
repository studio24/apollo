<!doctype html>
<html lang="en" class="no-js">

<head>

    <meta charset="utf-8">

    <title>Pattern library | Apollo</title>

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta property="og:description" name="description" content="The living content- and style guide for Studio 24 by Studio 24."/>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>

    <?php require_once('../_includes/scripts__header.html'); ?>

    <?php require_once('../_includes/styles.php') ?>

    <meta property="og:url" content="http://apollo.s24.net/"/>
    <meta property="og:image" content="http://apollo.s24.net/dist/assets/images/apollo.png"/>
    <meta property="og:title" content="Pattern library | Apollo"/>
    <meta name="twitter:card" content="summary"/>

	<style>
		header,
		.main-nav {
			box-sizing: content-box /* 1 */;
			margin-left: auto;
			margin-right: auto;
			max-width: 81.25rem;
			padding: 1.7rem 5vw;
		}

		@media screen and (min-width: 48em) {
			header,
			.main-nav {
				padding-left: 10vw;
				padding-right: 10vw;
			}
		}

		header a {
			align-items: center;
			display: flex;
		}

		header a span:last-of-type {
			white-space: nowrap;
		}

		.logo {
			margin-right: 0.5rem;
		}

		.logo svg {
			top: 50%;
			transform: translateY(-50%);
		}

		.main-nav {
			background-color: #e5e5e5;
		}

		.main-nav a {
			font-weight: bold;
			text-decoration: none;
		}

		.current {
			position: relative;
		}

		.current::after {
			background-color: darkred;
			bottom: -0.125rem;
			content: '';
			height: 0.3125rem;
			left: 0;
			position: absolute;
			width: 100%;
		}
	</style>

</head>



<body>

<div class="wrap">

	<header>
		<a href="#1">
			<span class="logo"><svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 78 40"><path d="M30.32 12.25h3V26.7h-3zm4.68 9.5A5.25 5.25 0 1140.22 27 5.18 5.18 0 0135 21.75zm7.52 0a2.28 2.28 0 10-2.28 2.34 2.22 2.22 0 002.26-2.34z"/><path d="M57.31 16.8v9.41c0 3.32-2.6 4.73-5.23 4.73a5 5 0 01-4.69-2.4l2.53-1.46a2.27 2.27 0 002.26 1.25 2 2 0 002.24-2.12v-.91a3.53 3.53 0 01-2.89 1.28 5 5 0 010-10 3.53 3.53 0 012.89 1.28v-1zm-2.89 4.75a2.4 2.4 0 10-2.4 2.3 2.24 2.24 0 002.4-2.3zm4.58.2A5.25 5.25 0 1164.24 27 5.19 5.19 0 0159 21.75zm7.52 0a2.28 2.28 0 10-2.27 2.34 2.22 2.22 0 002.26-2.34zM15.45 9.65v-4H2.05v29.2h13.4V30.6a10.35 10.35 0 010-20.7zm0 0v20.7a10.35 10.35 0 000-20.7z"/><circle cx="73.52" cy="14.54" r="2.2"/></svg></span>
			<span class="h3">Pattern library</span></a>
	</header>
	<nav class="l-cluster main-nav" aria-label="Main navigation">
		<ul class="clean-list">
			<li><a href="#1">Get started</a></li>
			<li><a href="#1">Styles</a></li>
			<li class="current"><a href="#1">Layouts</a></li>
			<li><a href="#1">Components</a></li>
			<li><a href="#1">Patterns</a></li>
			<li><a href="#1">Templates</a></li>
		</ul>
	</nav>
    <main>
	    <div class="l-sidebar">
		    <div>
			    <nav class="sidebar">
				    <p class="h4">In this section</p>
				    <ul>
					    <li><a href="../layouts/box.php">Box</a></li>
					    <li><a href="../layouts/center.php">Center</a></li>
					    <li><a href="../layouts/cluster.php">Cluster</a></li>
					    <li><a href="../layouts/cover.php">Cover</a></li>
					    <li><a href="../layouts/frame.php">Frame</a></li>
					    <li><a href="../layouts/sidebar.php">Sidebar</a></li>
					    <li><a href="../layouts/switcher.php">Switcher</a></li>
				    </ul>
			    </nav>
			    <div class="not-sidebar">

				    <h1>Layouts</h1>
				    <p>A guide to the discrete layout items, which can be used in combination to create more complex components and templates.</p>
			    </div>
		    </div>
	    </div>
    </main>

</div>
<footer class="global-footer">
    Footer content goes here
</footer>



<?php require_once('../_includes/scripts__footer.html'); ?>

</body>
</html>

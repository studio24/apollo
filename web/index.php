<!doctype html>
<html lang="en" class="">
<head>
	<meta charset="utf-8">
	<title>Apollo</title>
	<!-- Force IE to use latest rendering engine -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">

	<link rel="stylesheet" href="/assets/styles/styles.css" type="text/css"
	      media="screen"/>

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Proza+Libre:400,400i,600" rel="stylesheet">

</head>

<?php require_once( $_SERVER['DOCUMENT_ROOT'] . '/_includes/scripts__header.html' ); ?>

<body>


<?php require_once( $_SERVER['DOCUMENT_ROOT'] . '/assets/svg/icons.svg' ); ?>


<header class="island island--fullpage bg bg--primary">

	<div class="group">
		<div class="group__item group__item--primary">

			<h1 class="heading size--xxxl">Apollo</h1>
			<div class="lead">
				<p>The living content- and style guide for Studio 24 by <a
						href="http://studio24.net">Studio 24</a>.</p>
			</div>

			<p>Named in honour of Apollo, the Greek god of truth. This guide and
				its content serve as one single source
				of truth.</p>

			<p>This guide introduces and reinforces an understanding of the
				elements, components and templates that make a
				website through a shared vocabulary which is used for internal
				as well as client communcation.</p>

		</div>
	</div>

</header>


<!-- Main -->
<main>


	<section class="island island--fullpage">
		<div class="group">
			<div class="group__item">

				<h1 class="heading size--xl">Table of content</h1>

			</div>
		</div>
		<div class="group">
			<div class="group__item">


				<h2 class="heading size--xxl">Essentials</h2>

				<p>Essentials are more abstract elements like colour palettes,
					typography, and interactive states.</p>

				<ul class="clean-list clean-list--compact">
					<li><a href="#typography-and-copy">Typography and copy</a>
					</li>
					<li><a href="#accessible-and-inclusive-design">Accessible
							and inclusive design</a></li>
					<li><a href="#branding-and-colours">Branding and colours</a>
					</li>
				</ul>


				<h2 class="heading size--xxl">Elements</h2>

				<p>Our content is contained within Elements. Elements are the
					smallest building blocks of the
					interface, such as buttons or links.</p>

				<ul class="clean-list clean-list--compact">
					<li><a href="#buttons">Buttons</a></li>
					<li><a href="#headings">Headings</a></li>
					<li><a href="#lead">Lead</a></li>
					<li><a href="#links">Links</a></li>
					<li><a href="#paragraphs">Paragraphs</a></li>
					<li><a href="#text-level">Text-level</a></li>
				</ul>

			</div>
			<div class="group__item">

				<h2 class="heading size--xxl">Components</h2>

				<p>Components are groups of Elements (and sometimes Components)
					joined together to form distinct component of
					an interface, for example navigation or comment blocks.</p>

				<ul class="clean-list clean-list--compact">
					<li><a href="#banner">Banner</a></li>
					<li><a href="#breadcrumbs">Breadcrumbs</a></li>
					<li><a href="#call-to-actions">Call-to-actions</a></li>
					<li><a href="#callouts">Callouts</a></li>
					<li><a href="#collapsibles">Collapsibles</a></li>
					<li><a href="#columns">Columns</a></li>
					<li><a href="#forms">Forms</a></li>
					<li><a href="#lists">Lists</a></li>
					<li><a href="#media">Media</a></li>
					<li><a href="#metadata">Metadata</a></li>
					<li><a href="#navigation">Navigation</a></li>
					<li><a href="#notes">Notes</a></li>
					<li><a href="#pager">Pager</a></li>
					<li><a href="#pagination">Pagination</a></li>
					<li><a href="#quotes">Quotes</a></li>
					<li><a href="#share">Share</a></li>
					<li><a href="#tables">Tables</a></li>
					<li><a href="#tabs">Tabs</a></li>
					<li><a href="#taxonomies">Taxonomies</a></li>
					<li><a href="#videos">Videos</a></li>
				</ul>

			</div>
			<div class="group__item">

				<h2 class="heading size--xxl">Templates</h2>

				<p>Groups of Components are called Templates. Most pages are
					created by choosing a Templates, some allow
					you to choose Components as well and then completing the page
					with content.</p>

				<ul class="clean-list clean-list--compact">
					<li><a href="#t-example-template">Example template</a></li>
					<li><a href="donate.php">Donation template</a></li>
					<!-- 					<li><a href="#t-accommodation-details">Accommodation details</a></li>
										<li><a href="#t-contact">Contact</a></li>
										<li><a href="#t-course-landing">Course landing</a></li>
										<li><a href="#t-courses">Courses</a></li>
										<li><a href="#t-course-details">Course details</a></li>
										<li><a href="#t-generic">Generic (Default)</a></li>
										<li><a href="#t-locations">Locations</a></li>
										<li><a href="#t-news">News</a></li>
										<li><a href="#t-news-details">News details</a></li>
										<li><a href="#t-profile-details">Profile details</a></li>
										<li><a href="#t-search">Search</a></li>
										<li><a href="#t-search-results">Search results</a></li> -->
					<!-- <li><a href="#t-home">Homepage</a></li> -->
					<!-- <li><a href="#t-jobs">Job page?</a></li> -->
				</ul>

			</div>
		</div>
	</section>


	<!-- Essentials intro -------------------------------------------------- -->
	<section class="island island--fullpage">
		<div class="group">
			<div class="group__item group__item--primary">

				<h1 class="heading size--xxxl">Essentials</h1>
				<div class="lead">
					<p>Discover how to save money, time and better maintain your
						brand consistency across platforms by
						using a living content- and style guide.</p>
					<p>A style guide is a living document of code, which details
						all the various elements and coded
						modules of your site or application. Beyond its use in
						consolidating the front-end code, it also
						documents the visual language, such as header styles and
						color palettes, used to create the
						site.</p>
				</div>

			</div>
		</div>
	</section>
	<!-- / Essentials intro -------------------------------------------------- -->


	<!-- Essentials -------------------------------------------------- -->
	<section>

		<div class="group">
			<div class="group__item">

				<h3 class="small-caps">Essentials</h3>
				<h3 id="typography-and-copy" class="heading size--xl no-margin">
					Typography and copy</h3>

			</div>
		</div>
		<div class="group">
			<div class="group__item group__item--secondary">

				<div class="lead">
					<p>The web is 95% typography and copy, which is why we spend 95% of our time thinking about the words we use to express our brand.</p>
				</div>

			</div>
			<div class="group__item group__item--primary">

				<p>Our visitors span the entire globe and many speak English as
					a second or even third language which is why we keep it
					simple. Poets can be clever, we are clear.</p>

				<h4 class="heading subheading size--xl">Primary</h4>

				<p>The primary level of typography is all of the big type. It’s
					headlines and decks – also known as “furniture” – that draw
					readers into the design. This is usually the biggest type in
					the design.</p>

				<h5 class="heading size--l">Helvetica</h5>

				<p>Helvetica is a widely used sans-serif typeface developed in
					1957 by Swiss typeface designer Max Miedinger with input
					from Eduard
					Hoffmann.</p>

				<h4 class="heading subheading size--xl">Secondary</h4>

				<p>The secondary level of typography are the nuggets of
					scannable information that help readers stay with the
					design. This includes elements such as subheads, captions,
					pull quotes, infographics and other small blocks of text
					that add information to the primary level of text. The
					design of these text blocks is on the large side, but
					typically much smaller than lettering in the primary level
					of typography.</p>

				<h5 class="heading size--l">Georgia</h5>

				<p>Georgia is a serif typeface designed in 1993 by Matthew
					Carter and hinted by Tom Rickner for the Microsoft
					Corporation. It was intended as a serif font that would
					appear elegant but legible printed small or on
					low-resolution screens.</p>

				<h4 class="heading subheading size--xl">Tertiary</h4>

				<p>The tertiary level of typography is the main text of our
					design. It is often some of the smallest type in the design,
					but it needs to be large enough to be completely readable by
					all potential users. The typeface should be simple and
					consistent in design, spacing and overall usage.</p>

				<h5 class="heading size--l">Georgia</h5>

				<p>Georgia is a serif typeface designed in 1993 by Matthew
					Carter and hinted by Tom Rickner for the Microsoft
					Corporation. It was intended as a serif font that would
					appear elegant but legible printed small or on
					low-resolution screens.</p>


			</div>
		</div>

		<div class="group">
			<div class="group__item">

				<h3 class="small-caps">Essentials</h3>
				<h3 id="accessible-and-inclusive-design"
				    class="heading size--xl no-margin">Accessible and inclusive
					design</h3>

			</div>
		</div>
		<div class="group">
			<div class="group__item group__item--secondary">

				<p>We treat accessible and inclusive design as a first-class
					passenger making sure our website is
					accessible and usable for everyone.</p>

			</div>
			<div class="group__item group__item--primary">

				<p>Accessible and inclusive design isn't about people with
					disabilities, it's about everybody. People
					like me and you. Because people of all ethnicities, ages and
					abilities benefit from inclusive
					design.</p>

				<p>Disabilities affect us daily and can range from someone
					having a permanent disability, such as
					cognitive, vision, or mobility-related disability; or they
					may be temporary, such as someone with a
					broken arm; or even situational, such as a parent holding
					their newborn.</p>

				<p>By designing with accessibility and inclusive design in mind
					we are making sure that our website is
					available to as many people as possible.</p>

				<p>The <a href="https://www.w3.org/TR/WCAG20/">WCAG 2.0 AA
						compliance guidelines</a> are just the
					beginning. By exploring the various ways a person can touch,
					tap, press, swipe, click, hear, see and
					interact with our interfaces, we build inclusive products to
					meet any disability, whether they are
					permanent, temporary or situational.</p>

			</div>
		</div>

		<div class="group">
			<div class="group__item">

				<h3 class="small-caps">Essentials</h3>
				<h3 id="branding-and-colours"
				    class="heading size--xl no-margin">Branding and colours</h3>

			</div>
		</div>
		<div class="group">
			<div class="group__item group__item--secondary">

				<p>The importance of colour and branding in summary.</p>

			</div>
			<div class="group__item group__item--primary">

				<p>Consistency of color is critical to maintaining a coherent
					family of products, and accurately
					communicating the nature of specific content within an
					application.</p>
				<p>Colors also have a functional impact on readability, eye-strain, ability to attract attention.</p>

				<h4 class="heading size--xl">Brand palette</h4>

				<ul class="clean-list swatches">
					<li class="swatch">
						<span class="swatch__sample bg--primary"></span>
						<h4 class="heading size--l swatch__heading">Rhino
							Blue</h4>
						<p>
							rgb(245, 130, 31)<br>
							#27354F<br>
							Pantone Solid Coated 716 C
						</p>
					</li>
					<li class="swatch">
						<span class="swatch__sample bg--secondary"></span>
						<h4 class="heading size--l swatch__heading">Blaze
							Orange</h4>
						<p>
							rgb(72, 184, 216)<br>
							#ff6600<br>
							Pantone Solid Coated 2985 C
						</p>
					</li>
					<li class="swatch">
						<span class="swatch__sample bg--tertiary"></span>
						<h4 class="heading size--l swatch__heading">Orange
							Peel</h4>
						<p>
							rgb(68, 68, 68)<br>
							#ff9900<br>
							Pantone Solid Coated Black 7 C
						</p>
					</li>
					<li class="swatch">
						<span class="swatch__sample bg--accent"></span>
						<h4 class="heading size--l swatch__heading">Jacarta
							Purple</h4>
						<p>
							rgb(242, 242, 242)<br>
							#F2F2F2<br>
							Pantone Solid Coated 663 C
						</p>
					</li>
				</ul>

				<h4 class="heading size--xl">Neutrals palette</h4>

				<ul class="clean-list swatches">
					<li class="swatch">
						<span class="swatch__sample bg--subtle"></span>
						<h4 class="heading size--l swatch__heading">Mercury Grey
							(Subtle)</h4>
						<p>
							rgb(245, 130, 31)<br>
							#F5821F<br>
							Pantone Solid Coated 716 C
						</p>
					</li>
					<li class="swatch">
						<span class="swatch__sample bg--white"></span>
						<h4 class="heading size--l swatch__heading">Wild Sand
							White</h4>
						<p>
							rgb(72, 184, 216)<br>
							#48b8d8<br>
							Pantone Solid Coated 2985 C
						</p>
					</li>
					<li class="swatch">
						<span class="swatch__sample bg--black"></span>
						<h4 class="heading size--l swatch__heading">Mine Shaft
							Black</h4>
						<p>
							rgb(68, 68, 68)<br>
							#444444<br>
							Pantone Solid Coated Black 7 C
						</p>
					</li>
					<li class="swatch">
						<span class="swatch__sample bg--accent"></span>
						<h4 class="heading size--l swatch__heading">Jacarta
							Purple</h4>
						<p>
							rgb(242, 242, 242)<br>
							#F2F2F2<br>
							Pantone Solid Coated 663 C
						</p>
					</li>
				</ul>

				<h4 class="heading size--xl">System palette</h4>


				<ul class="clean-list swatches">
					<li class="swatch">
						<span class="swatch__sample bg--warning"></span>
						<h4 class="heading size--l swatch__heading">Candlelight
							(Warning)</h4>
						<p>
							rgb(245, 130, 31)<br>
							#F5821F<br>
							Pantone Solid Coated 716 C
						</p>
					</li>
					<li class="swatch">
						<span class="swatch__sample bg--alert"></span>
						<h4 class="heading size--l swatch__heading">Pomegranate
							(Alert)</h4>
						<p>
							rgb(72, 184, 216)<br>
							#f04618<br>
							Pantone Solid Coated 2985 C
						</p>
					</li>
				</ul>


			</div>
		</div>

	</section>
	<!-- / Essentials -------------------------------------------------- -->


	<!-- Elements intro -------------------------------------------------- -->
	<section class="island island--fullpage">
		<div class="group">
			<div class="group__item group__item--primary">

				<h1 class="heading size--xxxl">Elements</h1>
				<div class="lead">
					<p>Your content is contained within Elements. Elements are
						the smallest building blocks of the
						interface, such as buttons or inputs. They also include
						more abstract elements like colour
						palettes, typography, and interactive states.</p>
				</div>

			</div>
		</div>
	</section>
	<!-- / Elements intro -------------------------------------------------- -->


	<!-- Elements -------------------------------------------------- -->
	<section>

		<div class="group">
			<div class="group__item">

				<h3 class="small-caps">Elements</h3>
				<h3 id="buttons" class="heading size--xl no-margin">Buttons</h3>

			</div>
		</div>
		<div class="group">
			<div class="group__item group__item--secondary">

				<p>The Button element is used for submitting forms.</p>

			</div>
			<div class="group__item group__item--primary">


				<a href="link" class="button button--primary">Primary button</a>
				<a href="link" class="button button--secondary">Secondary
					button</a>
				<a href="link" class="button button--tertiary">Tertiary
					button</a>
				<a href="link" class="button button--accent">Accent button</a>
				<a href="link" class="button button--subtle">Subtle button</a>

				<a href="link" class="button button--primary">
					<span>Button with icon</span>
					<svg class="icon">
						<use xlink:href="#arrow-right"/>
					</svg>
				</a>

				<a href="link" class="button button--primary">
					<svg class="icon" aria-hidden="true">
						<use xlink:href="#email"/>
					</svg>
					<span class="visuallyhidden">Button with screen reader available context</span>
				</a>

				<a href="link" class="button button--primary">
					<svg class="icon">
						<use xlink:href="#instagram"/>
					</svg>
					<span>Button with icon</span>
				</a>


				<h4 class="heading size--xl subheading">Modfications</h4>

				<a href="link" class="button button--primary button--is-block">
					<svg class="icon">
						<use xlink:href="#email"/>
					</svg>
					<span>Block button with icon</span>
				</a>

				<!-- `is-disabled` overrides any modifiers -->
				<p><a href="link" class="button button--subtle" disabled>Disabled
						button</a></p>

				<p>
					<a href="link" class="button button--primary size--s">S
						button</a>
					<a href="link" class="button button--primary size--m">M
						button (default)</a>
					<a href="link" class="button button--primary size--l">L
						button</a>
					<a href="link" class="button button--primary size--xl">XL
						button</a>
					<a href="link" class="button button--primary size--xxl">XXL
						button</a>
					<a href="link" class="button button--primary size--xxxl">XXXL
						button</a>
				</p>

				<h4 class="heading size--xl subheading">Semantics</h4>

				<button type="button" class="button
                button--primary">Button
				</button>
				<a href="javascript(void);" class="button button--primary">Link
					(styled as
					button)</a>
				<span class="button button--primary">Span</span>


			</div>
		</div>

		<div class="group">
			<div class="group__item">

				<h3 class="small-caps">Elements</h3>
				<h3 id="headings" class="heading size--xl no-margin">
					Headings</h3>

			</div>
		</div>
		<div class="group">
			<div class="group__item group__item--secondary">

				<p>The Heading element is used for displaying our content's headings.</p>
				<p>We keep our headings under 65 characters (including spaces) so that they can be displayed for search engine results.</p>

			</div>
			<div class="group__item group__item--primary">

				<p>A well-defined information hierarchy is essential for a user
					to find their way around a website. One
					important factor in creating this hierarchy is the use of
					distinct header styles that help the user
					make sense of the content being presented.</p>

				<h4 class="heading size--xxxl">The Adventure of the Engineer&rsquo;s
					Thumb and the Noble Bachelor</h4>
				<h4 class="heading size--xxl">The Adventure of the Engineer&rsquo;s
					Thumb and the Noble Bachelor</h4>
				<h4 class="heading size--xl">The Adventure of the Engineer&rsquo;s
					Thumb and the Noble Bachelor</h4>
				<h4 class="heading size--l">The Adventure of the Engineer&rsquo;s
					Thumb and the Noble Bachelor</h4>
				<h4 class="heading size--m">The Adventure of the Engineer&rsquo;s
					Thumb and the Noble Bachelor</h4>
				<h4 class="heading size--s">The Adventure of the Engineer&rsquo;s
					Thumb and the Noble Bachelor</h4>

			</div>
		</div>

		<div class="group">
			<div class="group__item">

				<h3 class="small-caps">Elements</h3>
				<h3 id="lead" class="heading size--xl no-margin">Lead</h3>

			</div>
		</div>
		<div class="group">
			<div class="group__item group__item--secondary">

				<p>The Lead element is used for displaying a summary of the page our visitors
					is about to read. On most templates this follow the H1
					heading.</p>
				<p>We keep our lead concise and under 140 characters (including
					spaces) so that it can be displayed for search engine results as the meta description.</p>

			</div>
			<div class="group__item group__item--primary">

				<div class="lead">
					<p>The Adventures of Sherlock Holmes is a compilation of twelve short stories that was published on 1892 and written by Sir Arthur Conan Doyle.</p>
				</div>


			</div>
		</div>

		<div class="group">
			<div class="group__item">

				<h3 class="small-caps">Elements</h3>
				<h3 id="links" class="heading size--xl no-margin">Links</h3>

			</div>
		</div>
		<div class="group">
			<div class="group__item group__item--secondary">

				<p>The Link element is used for displaying content that links from one place to another.</p>
				<p>Instead of writing, &ldquo;Click here,&rdquo; we always write descriptive texts explaining the destination. This way people aren&rsquo;t frustrated by links leading them places they didn&rsquo;t want to go.</p>

			</div>
			<div class="group__item group__item--primary">


				<h5 class="size size--xl heading subheading">Example of good links</h5>

				<p>
					<a href="javascript:void(0)">Call Sherlock Holmes</a>
				</p>
				<p>
					<a href="javascript:void(0)">Book your appointment now</a>
				</p>
				<p>
					<a href="javascript:void(0)">
						<svg class="icon">
							<use xlink:href="#phone"/>
						</svg><span>Call Sherlock Holmes</span> </a>
				</p>


				<h5 class="size size--xl heading subheading">Example of bad links</h5>
				<p>
					<a href="javascript:void(0)">Click here</a>
				</p>
				<p>&ldquo;Click here,&rdquo; is instructive instead of descriptive and tells people what they should be doing instead of telling them where a link will take them.</p>

				<p>
					<a href="javascript:void(0)">Read more</a>
				</p>
				<p>&ldquo;Read more,&rdquo; is contextual to its surrounding copy and heading. People browsing using screen readers or other
					<abbr title="assistive technology">AT</abbr> won&rsquo;t have that context and won&rsquo;t be able to know what, &ldquo;more,&rdquo; they&rsquo;re about to read.</p>


			</div>
		</div>

		<div class="group">
			<div class="group__item">

				<h3 class="small-caps">Elements</h3>
				<h3 id="paragraphs" class="heading size--xl no-margin">
					Paragraphs</h3>

			</div>
		</div>
		<div class="group">
			<div class="group__item group__item--secondary">

				<p>The Paragraph elements are used for displaying our content. The ideal standard is no more than 20 words per sentence, five sentences per paragraph.</p>

			</div>
			<div class="group__item group__item--primary">

				<p>To Sherlock Holmes she is always the woman. I have seldom
					heard him mention her under any other name.
					In his eyes she eclipses and predominates the whole of her
					sex. It was not that he felt any emotion
					akin to love for Irene Adler.</p>
				<p>All emotions, and that one particularly, were abhorrent to
					his cold, precise but admirably balanced
					mind. He was, I take it, the most perfect reasoning and
					observing machine that the world has seen,
					but as a lover he would have placed himself in a false
					position. He never spoke of the softer
					passions, save with a gibe and a sneer.</p>
				<p>At three o’clock precisely I was at Baker Street, but Holmes
					had not yet returned. The landlady
					informed me that he had left the house shortly after eight
					o’clock in the morning. I sat down beside
					the fire, however, with the intention of awaiting him,
					however long he might be.</p>

			</div>
		</div>

		<div class="group">
			<div class="group__item">

				<h3 class="small-caps">Elements</h3>
				<h3 id="text-level" class="heading size--xl no-margin">
					Text-level</h3>

			</div>
		</div>
		<div class="group">
			<div class="group__item group__item--secondary">

				<p>The Text-level elements are used for displaying content which needs strong importance (<code>strong</code>) or stressed emphasis (<code>em</code>).</p>

			</div>
			<div class="group__item group__item--primary">

				<p>To Sherlock Holmes she is <strong>always the woman</strong>.
					I have seldom heard him mention her
					under any other name. In his eyes she eclipses and
					predominates the whole of her sex. It was not
					that he felt any emotion akin to love for Irene Adler.</p>
				<p>All emotions, and <em>that one particularly</em>, were
					abhorrent to his cold, precise but admirably
					balanced mind. He was, I take it, the most perfect reasoning
					and observing machine that the world
					has seen, but as a lover he would have placed himself in a
					false position. He never spoke of the
					softer passions, save with a gibe and a sneer.</p>
				<p>At three o’clock precisely I was at <a href="googlemap">Baker
						Street</a>, but Holmes had not yet
					returned. The landlady informed me that he had left the
					house shortly after eight o’clock in the
					morning. I sat down beside the fire, however, with the
					intention of awaiting him, however long he
					might be.</p>

			</div>
		</div>

	</section>
	<!-- / Elements -------------------------------------------------- -->


	<!-- Components intro -------------------------------------------------- -->
	<section class="island island--fullpage">
		<div class="group">
			<div class="group__item group__item--primary">

				<h1 class="heading size--xxxl">Components</h1>
				<div class="lead">
					<p>Components are groups of Elements (and sometimes Components)
						joined together to form distinct section
						of an interface, for example navigation or comment
						blocks.</p>
				</div>

			</div>
		</div>
	</section>
	<!-- / Components intro -------------------------------------------------- -->


	<!-- Components -------------------------------------------------- -->
	<section>


		<div class="group">
			<div class="group__item">

				<h3 class="small-caps">Components</h3>
				<h4 id="banner" class="heading size--xl no-margin">Banner</h4>

			</div>
		</div>
		<div class="group">
			<div class="group__item group__item--secondary">

				<p>The banner component lets you feature a prominent
					call-to-action and establish the brand tone.</p>
				<p>Numerous studies have proven that people ignore content
						when used in carousels which is why we use a static image with a strong message.</p>

			</div>
			<div class="group__item group__item--primary">

				<!--

				- role="banner" to give it ARIA meaning
				- target styling using class names

				-->

				<figure class="banner" role="banner">
					<img class="banner__image"
					     src="/assets/images/sherlock-banner.jpg"
					     alt="Descriptive text.">
					<figcaption class="banner__caption">

						<h2 class="heading size--xxl">The Adventure of the
							Engineer’s Thumb</h2>
						<div class="lead">
							<p>At three o’clock precisely I was at Baker Street,
								but Holmes had not yet returned.</p>
						</div>
						<p>
							<a href="link" class="button button--secondary">
								<span>Call Mrs. Hudson today</span>
								<svg class="icon">
									<use xlink:href="#arrow-right"/>
								</svg>
							</a>
						</p>

					</figcaption>
				</figure>

			</div>
		</div>


		<div class="group">
			<div class="group__item">

				<h3 class="small-caps">Components</h3>
				<h4 id="breadcrumbs" class="heading size--xl no-margin">
					Breadcrumbs &#10004;</h4>

			</div>
		</div>
		<div class="group">
			<div class="group__item group__item--secondary">

				<p>The Breadcrumbs component is used for displaying where our visitors are, within the hierarchy of our website.</p>

			</div>
			<div class="group__item group__item--primary">

				<h2 class="visuallyhidden">You are here:</h2>

				<ol class="breadcrumbs" itemscope
				    itemtype="http://schema.org/BreadcrumbList">
					<li itemprop="itemListElement" itemscope
					    itemtype="http://schema.org/ListItem">
						<a href="http://www.domain.com/" itemprop="item">
							<span itemprop="name">Home</span>
						</a>
						<meta itemprop="position" position="1"/>
					</li>
					<li itemprop="itemListElement" itemscope
					    itemtype="http://schema.org/ListItem">
						<a href="http://www.domain.com/level-1" itemprop="item">
							<span itemprop="name">Level 1</span>
						</a>
						<meta itemprop="position" position="2"/>
					</li>
					<li itemprop="itemListElement" itemscope
					    itemtype="http://schema.org/ListItem">
						<a href="http://www.domain.com/level-1/level-2"
						   itemprop="item">
							<span itemprop="name">Level 2</span>
						</a>
						<meta itemprop="position" position="3"/>
					</li>
					<li itemprop="itemListElement" itemscope
					    itemtype="http://schema.org/ListItem">
			        <span itemprop="item">
			            <span itemprop="name">Current page title</span>
			        </span>
						<meta itemprop="position" position="4"/>
					</li>
				</ol>

			</div>
		</div>

		<div class="group">
			<div class="group__item">

				<h3 class="small-caps">Components</h3>
				<h4 id="call-to-actions" class="heading size--xl no-margin">
					Call-to-actions</h4>

			</div>
		</div>
		<div class="group">
			<div class="group__item group__item--secondary">

				<p>The call-to-action component is used to draw your visitors
					attention and encourage them to act on your
					message.</p>

			</div>
			<div class="group__item group__item--primary">

				<figure class="cta bg--primary padding--surround">
					<h2 class="h4">Sherlock Holmes</h2>
					<p>At three o’clock precisely I was at Baker Street, but
						Holmes had not yet returned.</p>
					<a href="link" class="button button--subtle">
						<span>Call Mrs. Hudson today</span>
						<svg class="icon">
							<use xlink:href="#arrow-right"/>
						</svg>
					</a>
				</figure>

				<figure class="cta bg--subtle padding--surround">
					<h2 class="h4">Sherlock Holmes</h2>
					<p>At three o’clock precisely I was at Baker Street, but
						Holmes had not yet returned.</p>
					<a href="link" class="button button--secondary">
						<span>Call Mrs. Hudson today</span>
						<svg class="icon">
							<use xlink:href="#arrow-right"/>
						</svg>
					</a>
				</figure>

			</div>
		</div>


		<div class="group">
			<div class="group__item">

				<h3 class="small-caps">Components</h3>
				<h4 id="callouts" class="heading size--xl no-margin">
					Callouts</h4>

			</div>
		</div>
		<div class="group">
			<div class="group__item group__item--secondary">

				<p>The Callout component is used for displaying emphasised groups of content.</p>

			</div>
			<div class="group__item group__item--primary">

				<figure class="callout">
					<figcaption>
						<h2 class="size--l heading">The Adventure of the
							Engineer’s Thumb</h2>
						<p>At three o’clock precisely I was at Baker Street,
							but Holmes had not yet returned.</p>
					</figcaption>
				</figure>

			</div>
		</div>


		<div class="group">
			<div class="group__item">

				<h3 class="small-caps">Components</h3>
				<h4 id="collapsibles" class="heading size--xl no-margin">
					Collapsibles &#10004;</h4>

			</div>
		</div>
		<div class="group">
			<div class="group__item group__item--secondary">

				<p>The Collapsible component is used for displaying groups of content that would otherwise appear daunting.</p>
				<p>We use jQuery to add the interactive parts and the ARIA attributes.</p>
				<p>We are careful and don&rsquo;t overuse the Collapsible component, as it increases interaction cost, cognitive load and forces our visitors to activate options that may not be the information they are looking for.</p>

			</div>
			<div class="group__item group__item--primary">

			<h5 class="heading size size--xl subheading">Collapsibles with Javascript</h5>

				<!-- Collapsibles wrapper -->
				<div class="collapsibles js-collapsibles">

					<!-- Section: collapsible: item -->
					<h3 class="heading size--xl js-collapsible-heading">A
						Scandal in Bohemia</h3>
					<div class="js-collapsible-content">
						<p>To Sherlock Holmes she is always the woman. I have
							seldom heard him mention her under any
							other name. In his eyes she eclipses and
							predominates the whole of her sex. It was not that
							he felt any emotion akin to love for Irene
							Adler.</p>
						<p>All emotions, and that one particularly, were
							abhorrent to his cold, precise but admirably
							balanced mind. He was, I take it, the most perfect
							reasoning and observing machine that the
							world has seen, but as a lover he would have placed
							himself in a false position. He never
							spoke of the softer passions, save with a gibe and a
							sneer.</p>
					</div>
					<!-- / Section: collapsible: item -->

					<!-- Section: collapsible: item -->
					<h3 class="heading size--xl js-collapsible-heading">The
						Red-Headed League</h3>
					<div class="js-collapsible-content">
						<p>At three o’clock precisely I was at Baker Street, but
							Holmes had not yet returned. The
							landlady informed me that he had left the house
							shortly after eight o’clock in the morning.
							I sat down beside the fire, however, with the
							intention of awaiting him, however long he
							might be.</p>
						<p>I was already deeply interested in his inquiry, for,
							though it was surrounded by none of the
							grim and strange features which were associated with
							the two crimes which I have already
							recorded, still, the nature of the case and the
							exalted station of his client gave it a
							character of its own.</p>
					</div>
					<!-- / Section: collapsible: item -->
				</div>
				<!-- / Collapsibles wrapper -->


				<h5 class="heading size size--xl subheading">Collapsibles without Javascript</h5>

				<!-- Collapsibles wrapper -->
				<div class="collapsibles">

					<!-- Section: collapsible: item -->
					<h3 class="heading size--xl">A
						Scandal in Bohemia</h3>
					<div class="">
						<p>To Sherlock Holmes she is always the woman. I have
							seldom heard him mention her under any
							other name. In his eyes she eclipses and
							predominates the whole of her sex. It was not that
							he felt any emotion akin to love for Irene
							Adler.</p>
						<p>All emotions, and that one particularly, were
							abhorrent to his cold, precise but admirably
							balanced mind. He was, I take it, the most perfect
							reasoning and observing machine that the
							world has seen, but as a lover he would have placed
							himself in a false position. He never
							spoke of the softer passions, save with a gibe and a
							sneer.</p>
					</div>
					<!-- / Section: collapsible: item -->

					<!-- Section: collapsible: item -->
					<h3 class="heading size--xl">The
						Red-Headed League</h3>
					<div class="">
						<p>At three o’clock precisely I was at Baker Street, but
							Holmes had not yet returned. The
							landlady informed me that he had left the house
							shortly after eight o’clock in the morning.
							I sat down beside the fire, however, with the
							intention of awaiting him, however long he
							might be.</p>
						<p>I was already deeply interested in his inquiry, for,
							though it was surrounded by none of the
							grim and strange features which were associated with
							the two crimes which I have already
							recorded, still, the nature of the case and the
							exalted station of his client gave it a
							character of its own.</p>
					</div>
					<!-- / Section: collapsible: item -->
				</div>
				<!-- / Collapsibles wrapper -->



			</div>
		</div>


		<div class="group">
			<div class="group__item">

				<h3 class="small-caps">Components</h3>
				<h4 id="columns" class="heading size--xl no-margin">Columns</h4>

			</div>
		</div>
		<div class="group">
			<div class="group__item group__item--secondary">

				<p>The Column component is used for displaying content in columns.</p>
				<p>We are careful and only use the Column component when it helps readability as people struggle to read information that isn&rsquo;t linear.</p>

			</div>
			<div class="group__item group__item--primary">


				<div class="columns">
					<ol>
						<li>A Scandal in Bohemia</li>
						<li>The Red-Headed League</li>
						<li>A Case of Identity</li>
						<li>The Boscombe Valley Mystery</li>
						<li>The Five Orange Pips</li>
						<li>The Man with the Twisted Lip</li>
						<li>The Adventure of the Blue Carbuncle</li>
						<li>The Adventure of the Speckled Band</li>
						<li>The Adventure of the Engineer’s Thumb</li>
						<li>The Adventure of the Noble Bachelor</li>
						<li>The Adventure of the Beryl Coronet</li>
						<li>The Adventure of the Copper Beeches</li>
						<li>A Scandal in Bohemia</li>
						<li>The Red-Headed League</li>
						<li>A Case of Identity</li>
						<li>The Boscombe Valley Mystery</li>
						<li>The Five Orange Pips</li>
						<li>The Man with the Twisted Lip</li>
						<li>The Adventure of the Blue Carbuncle</li>
						<li>The Adventure of the Speckled Band</li>
						<li>The Adventure of the Engineer’s Thumb</li>
						<li>The Adventure of the Noble Bachelor</li>
						<li>The Adventure of the Beryl Coronet</li>
						<li>The Adventure of the Copper Beeches</li>
					</ol>
				</div>


			</div>
		</div>


		<div class="group">
			<div class="group__item">

				<h3 class="small-caps">Components</h3>
				<h4 id="forms" class="heading size--xl no-margin">Forms</h4>

			</div>
		</div>
		<div class="group">
			<div class="group__item group__item--secondary">

				<p>The Form component is used for displaying form fields which lets us collect information from our
					visitors.</p>
				<p>We use <a href="http://dbushell.github.io/Pikaday/">Pikaday</a>, JavaScript plugin, to enhance picking a date from a calendar.</p>
				<p>We use <a href="http://parsleyjs.org/">Parsley</a>, a JavaScript library, to handle client-side form validation.</p>
				<p>Using Pikaday and Parsley, we also add the interactive parts and the ARIA attributes to make form completion as easy as possible for people.</p>


			</div>
			<div class="group__item group__item--primary">



				<form action="" class="padding--surround bg bg--subtle form js-validate-form">

					<div class="field-group">
						<label for="guide-form-field-1" class="field-label">
							Email <small>(Required)</small>
							<div class="field-description">
								We&rsquo;ll only contact you if there&rsquo;s something wrong with your order.
							</div>
						</label> <input type="email"
						                class="field-input field-input--text"
						                name="guide-form-field-1"
						                id="guide-form-field-1"
						                placeholder="E.g. jane.smith@example.co.uk"
						                data-parsley-error-message="Please complete this field with a valid email address."
						                required
						                aria-invalid="false">
					</div>

					<div class="field-group">
						<label for="guide-form-field-2" class="field-label">
							Name <small>(Required)</small>
						</label> <input type="text"
						                class="field-input field-input--text"
						                name="guide-form-field-2"
						                id="guide-form-field-2"
						                placeholder="E.g. Jane Smith"
						                data-parsley-error-message="Please complete this field with your name."
						                required
						                aria-invalid="false">
					</div>

					<div class="field-group">
						<label for="guide-form-field-3" class="field-label">
							Date of birth <small>(Required)</small>
						</label> <input type="date"
						                class="field-input field-input--date js-pikaday"
						                name="guide-form-field-3"
						                id="guide-form-field-3"
						                placeholder="E.g. 21/10/1985"
						                data-parsley-error-message="Please select a date."
						                required
						                aria-invalid="false">
					</div>


					<div class="field-group">
						<label for="select-input" class="field-label">
							Country <small>(Required)</small>
						</label> <select name="select-input"
						                 id="select-input"
						                 class="field-input input--select"
						                 data-parsley-error-message="Please select an option."
						                 required
						                 aria-invalid="false">
							<option value=""></option>
							<option value="1">Option 1</option>
							<option value="2">Option 2</option>
							<option value="3">Option 3</option>
						</select>
					</div>


					<div class="field-group">
						<label for="textarea-input" class="field-label">
							Textarea input <small>(Required)</small>
							<div class="field-description">
								Please explain the problem you are having, we&rsquo;ll come up with the solution
							</div>
						</label> <textarea name="textarea-input"
						                   id="textarea-input" cols="30"
						                   rows="10"
						                   class="field-input input--textarea"
						                   placeholder="E.g. Hi, I am&hellip;"
						                   data-parsley-error-message="Please complete this field with your problem."
						                   required
						                   aria-invalid="false">

						</textarea>
					</div>


					<!-- Checkbox -->
					<fieldset class="field-group checkbox-group">

						<legend class="group-legend">
							Subscribe to our newsletter
						</legend>

						<div class="field-description">
							We will send you a monthly newsletter with promotions. We will guard your email with our lives and never give it out to a third-party.
						</div>

						<label for="checkbox-input">
							<input id="checkbox-input"
							       name="checkbox-input"
							       class="input--checkbox"
							       value="data-value"
							       type="checkbox">
							<span class="checkbox-label">
                                Yes, I would love to receive your newsletter once a month
                            </span> </label>

					</fieldset>
					<!-- / Checkbox -->


					<!-- / Radio options -->
					<fieldset class="field-group radio-group"
					          role="radiogroup"
					          aria-required="true">

						<legend class="group-legend">
							Radio input
						</legend>

						<div class="field-description">
							Radio options are easier to read and quicker to
							scan when laid out one under the other
							instead of next to each other.
						</div>

						<label for="radio-input">
							<input id="radio-input"
							       name="radio-input"
							       class="input--radio"
							       value="data-value"
							       type="radio"
							       data-parsley-error-message="Please complete by selecting your preference."
							       required
							       aria-invalid="false">
							<span class="radio-label">
								Radio option.
							</span> </label>

						<label for="radio-input2">
							<input id="radio-input2"
							       name="radio-input"
							       class="input--radio"
							       value="data-value"
							       type="radio">
							<span class="radio-label">
								Another radio option.
							</span> </label>

					</fieldset>
					<!-- / Radio options -->



					<!-- Segmented group -->
					<fieldset
						class="field-group segmented-group-wrapper">

						<legend class="group-legend">
							Segmented options (Radio)
						</legend>

						<div class="field-description">
							We understand that different people enjoy books in different ways, which is why we&rsquo;re giving you lots of options.
						</div>

						<!-- Wrapper for labels -->
						<div class="segmented-group">

							<label for="segmented-option-1"> <input
									id="segmented-option-1"
									name="segmented-options"
									class="input--radio"
									value="data-value"
									type="radio"
									data-parsley-error-message="Please select your preferred choice."
									required
									aria-invalid="false">
								<div class="segmented-label">
									<h2 class="size--l heading">Digital download</h2>
									<div class="no-margin">Download The Adventure of the Engineer’s Thumb in less than 5 minutes.</div>
								</div>
							</label>

							<label for="segmented-option-2"> <input
									id="segmented-option-2"
									name="segmented-options"
									class="input--radio"
									value="data-value"
									type="radio"
									checked>
								<div class="segmented-label">
									<h2 class="size--l heading">Hardcover</h2>
									<div class="no-margin">We&rsquo;ll send you the hardcover of The Adventure of the Engineer’s Thumb, expect it in 2 weeks.</div>
								</div>
							</label>

							<label for="segmented-option-3"> <input
									id="segmented-option-3"
									name="segmented-options"
									class="input--radio"
									value="data-value"
									type="radio">
								<div class="segmented-label">
									<h2 class="size--l heading">Digital + Hardcover</h2>
									<div class="no-margin">Download The Adventure of the Engineer’s Thumb today and get the hardcover book in 2 weeks.</div>
								</div>
							</label>

						</div>
						<!-- / Wrapper for labels -->

					</fieldset>
					<!-- / Segmented group -->


					<div class="field-group">
						<button type="submit" class="button button--primary size--xl">Action-contextual
							label, i.e. not 'Submit'
						</button>
					</div>


				</form>



				<h5 class="size--l subheading">Search component</h5>

				<form action="">

					<div class="fieldset-wrapper">
						<fieldset>

							<legend class="visuallyhidden">Search the entire
								website
							</legend>

							<div class="field-group input-group">
								<label for="search-input"
								       class="field-label visuallyhidden">
									Search
								</label>
								<input type="text"
								       placeholder="E.g. The Noble Bachelor">
								<div class="input-group__button">
									<button type="submit" class="button button--primary">
										Search
									</button>
								</div>
							</div>

						</fieldset>
					</div>

				</form>


			</div>
		</div>


		<div class="group">
			<div class="group__item">

				<h3 class="small-caps">Components</h3>
				<h4 id="lists" class="heading size--xl no-margin">Lists</h4>

			</div>
		</div>
		<div class="group">
			<div class="group__item group__item--secondary">

				<p>The List component is used for displaying unordered and ordered lists of content. The definition list is used for displaying terms and their definition.</p>

			</div>
			<div class="group__item group__item--primary">

				<h5 class="h4">Clean list</h5>

				<ul class="clean-list">
					<li>Sherlock Holmes</li>
					<li>Dr. Watson</li>
					<li>Inspector Lestrade</li>
					<li>Mary Morstan</li>
					<li>Thaddeus Sholto</li>
					<li>Bartholomew Sholto</li>
					<li>Det. Insp. Atherly Jones</li>
					<li>Jonathan Small</li>
					<li>Tonga</li>
					<li>Maj. John Sholto</li>
					<li>Toby</li>
				</ul>

				<h5 class="h4">Definition list</h5>

				<dl>
					<dt>1887</dt>
					<dd>A Study in Scarlet</dd>

					<dt>1890</dt>
					<dd>The Sign of the Four</dd>

					<dt>1892</dt>
					<dd>The Adventure of Silver Blaze</dd>

					<dt>1893</dt>
					<dd>The Adventure of the Musgrave Ritual</dd>

					<dt>1902</dt>
					<dd>The Hound of the Baskervilles</dd>

					<dt>1915</dt>
					<dd>The Valley of Fear</dd>
				</dl>


				<h5 class="h4">Ordered list</h5>

				<p>Ordered lists are automatically numbered using <abbr
						title="Cascading Style Sheets">CSS</abbr>.</p>

				<ol>
					<li>A Scandal in Bohemia</li>
					<li>The Red-Headed League</li>
					<li>A Case of Identity
						<ol>
							<li>The Five Orange Pips</li>
							<li>The Man with the Twisted Lip</li>
							<li>The Adventure of the Blue Carbuncle</li>
							<li>The Adventure of the Speckled Band</li>
						</ol>
					</li>
					<li>The Boscombe Valley Mystery</li>
					<li>The Five Orange Pips</li>
					<li>The Man with the Twisted Lip</li>
					<li>The Adventure of the Blue Carbuncle</li>
					<li>The Adventure of the Speckled Band
						<ol>
							<li>The Five Orange Pips</li>
							<li>The Man with the Twisted Lip</li>
							<li>The Adventure of the Blue Carbuncle</li>
							<li>The Adventure of the Speckled Band</li>
						</ol>
					</li>
					<li>The Adventure of the Engineer’s Thumb</li>
					<li>The Adventure of the Noble Bachelor</li>
					<li>The Adventure of the Beryl Coronet</li>
					<li>The Adventure of the Copper Beeches</li>
				</ol>

				<h5 class="h4">Unordered list</h5>

				<ul>
					<li>Sherlock Holmes</li>
					<li>Dr. Watson</li>
					<li>Inspector Lestrade</li>
					<li>Mary Morstan</li>
					<li>Thaddeus Sholto</li>
					<li>Bartholomew Sholto</li>
					<li>Det. Insp. Atherly Jones</li>
					<li>Jonathan Small</li>
					<li>Tonga</li>
					<li>Maj. John Sholto</li>
					<li>Toby</li>
				</ul>
			</div>
		</div>

		<div class="group">
			<div class="group__item">

				<h3 class="small-caps">Components</h3>
				<h4 id="media" class="heading size--xl no-margin">Media</h4>

			</div>
		</div>
		<div class="group">
			<div class="group__item group__item--secondary">

				<p>The Media component is used for displaying is an image with optional copy.</p>
				<p><strong>We always including an alternative text for the image.</strong>. If the image can&rsquo;t be displayed, e.g. it might fail to load or our visitors are using
					<abbr title="Assistive technology">AT</abbr> such as a screen reader, this text is used to provide alternative information to our visitors.</p>
                <p>We keep this <strong>under 150 characters</strong> so that <abbr>AT</abbr>, such as JAWS, can read out all of it.</p>

			</div>
			<div class="group__item group__item--primary">


				<h4 class="heading size--xl subheading">Media</h4>


				<figure class="media">
					<img class="media__image"
					     src="/assets/images/sherlock-16-9.jpg"
					     alt="Sherlock Holmes and Dr. Watson sitting next to each in armchairs, deep in thought.">
					<figcaption class="media__caption">
						<h3 class="h4">Sherlock Holmes</h3>
						<p>At three o’clock precisely I was at Baker Street, but
							Holmes had not yet returned.</p>
						<a href="link" class="button button--primary">
							<span>Call Mrs. Hudson</span>
							<svg class="icon">
								<use xlink:href="#arrow-right"/>
							</svg>
						</a>
					</figcaption>
				</figure>


				<figure class="media media--abreast media--left-on-lap">
					<img class="media__image"
					     src="/assets/images/sherlock-16-9.jpg"
					     alt="Descriptive text.">
					<figcaption class="media__caption">
						<h3 class="h4">Sherlock Holmes</h3>
						<p>At three o’clock precisely I was at Baker Street, but
							Holmes had not yet returned.</p>
						<a href="link" class="button button--primary">
							<span>Call Mrs. Hudson</span>
							<svg class="icon">
								<use xlink:href="#arrow-right"/>
							</svg>
						</a>
					</figcaption>
				</figure>


				<figure class="media media--abreast media--right-on-lap">
					<img class="media__image"
					     src="/assets/images/sherlock-16-9.jpg"
					     alt="Descriptive text.">
					<figcaption class="media__caption">
						<h3 class="h4">Sherlock Holmes</h3>
						<p>At three o’clock precisely I was at Baker Street, but
							Holmes had not yet returned.</p>
						<a href="link" class="button button--primary">
							<span>Call Mrs. Hudson</span>
							<svg class="icon">
								<use xlink:href="#arrow-right"/>
							</svg>
						</a>
					</figcaption>
				</figure>


			</div>
		</div>


		<div class="group">
			<div class="group__item">

				<h3 class="small-caps">Components</h3>
				<h4 id="metadata" class="heading size--xl no-margin">
					Metadata</h4>

			</div>
		</div>
		<div class="group">
			<div class="group__item group__item--secondary">

				<p>The Metadata component is used for displaying information about other data, e.g. a timestamp for a news item.</p>

			</div>
			<div class="group__item group__item--primary">

				<ul class="metadata">
					<li>
						<a href="" class="taxonomy">The Hound of the
							Baskervilles</a>
					</li>
					<li>
						<span class="metadata__author">Dr. Watson</span>
					</li>
					<li>
						<time pubdate datetime="2016-03-14">14 March 1902</time>
					</li>
				</ul>


			</div>
		</div>


		<div class="group">
			<div class="group__item">

				<h3 class="small-caps">Components</h3>
				<h4 id="navigation" class="heading size--xl no-margin">
					Navigation</h4>

			</div>
		</div>
		<div class="group">
			<div class="group__item group__item--secondary">

				<p>The Navigation component is used for displaying primary and secondary navigation links.</p>

			</div>
			<div class="group__item group__item--primary">

				<h4 class="heading size--xl subheading">Primary navigation</h4>

				<nav class="nav nav--primary">
					<ul class="nav-list inline-list">
						<li><a href="/">
								<img src="/assets/images/logo.png"
								     alt="Logo name">
							</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>

						<!-- Special search link -->
						<li>
							<a href="/search">
								<svg class="icon">
									<use xlink:href="#search"/>
								</svg>
								<span>Search</span>
							</a>
						</li>
						<!-- / Special search link -->

					</ul>
				</nav>


				<h4 class="heading size--xl subheading">Secondary
					navigation</h4>


				<nav class="nav nav--secondary">
					<ul class="clean-list bg bg--subtle padding--surround">
						<li><a href="javascript:void(0)">A Scandal in
								Bohemia</a></li>
						<li><a href="javascript:void(0)">The Red-Headed
								League</a></li>
						<li><a href="javascript:void(0)">A Case of Identity</a>
						</li>
						<li><a href="javascript:void(0)">The Boscombe Valley
								Mystery</a></li>
						<li><a href="javascript:void(0)">The Five Orange
								Pips</a></li>
						<li><a href="javascript:void(0)">The Man with the
								Twisted Lip</a></li>
					</ul>
				</nav>


			</div>
		</div>


		<div class="group">
			<div class="group__item">

				<h3 class="small-caps">Components</h3>
				<h4 id="notes" class="heading size--xl no-margin">Notes
					&#10004;</h4>

			</div>
		</div>
		<div class="group">
			<div class="group__item group__item--secondary">

				<p>The Note component is used for displaying copy which needs more attention.</p>
				<p>We reserve the use of Notes components for really important information which benefits our visitors. If abused, they will ignore it.</p>

			</div>
			<div class="group__item group__item--primary">

				<div class="note" aria-label="Information">
					<h3 class="heading size--xl">Sherlock Holmes</h3>
					<p>At three o’clock precisely I was at <a
							href="javascript:void(0)">Baker Street</a>, but
						Holmes had
						not yet returned. The landlady informed me that he had
						left the house shortly after eight
						o’clock in the morning.</p>
				</div>


				<h4 class="size--xl heading subheading">Warning note</h4>

				<div class="note bg bg--warning" aria-label="Alert">
					<h3 class="heading size--xl">Sherlock Holmes</h3>
					<p>At three o’clock precisely I was at <a
							href="javascript:void(0)">Baker Street</a>, but
						Holmes had
						not yet returned. The landlady informed me that he had
						left the house shortly after eight
						o’clock in the morning.</p>
				</div>

				<h4 class="size--xl heading subheading">Alert note</h4>

				<div class="note bg bg--alert" aria-label="Alert">
					<h3 class="heading size--xl">Sherlock Holmes</h3>
					<p>At three o’clock precisely I was at <a
							href="javascript:void(0)">Baker Street</a>, but
						Holmes had
						not yet returned. The landlady informed me that he had
						left the house shortly after eight
						o’clock in the morning.</p>
				</div>


			</div>
		</div>


		<div class="group">
			<div class="group__item">

				<h3 class="small-caps">Components</h3>
				<h4 id="pager" class="heading size--xl no-margin">Pager
					&#10004;</h4>

			</div>
		</div>
		<div class="group">
			<div class="group__item group__item--secondary">

				<p>The Pager component is used for displaying links to previous and next pages.</p>

			</div>
			<div class="group__item group__item--primary">


				<ul class="pager group" role="navigation" aria-label="Pager">
					<li class="group__item">
						<a href="#" rel="prev" class="pager__previous">
							<span
								class="small-caps color--subtle">Previous</span>
							<p class="heading size--l margin--third">The
								Adventure of the Engineer’s Thumb</p>
						</a>
					</li>
					<li class="group__item align-right-from-lap">
						<a href="#" rel="next" class="pager__next">
							<span class="small-caps color--subtle">Next</span>
							<p class="heading size--l margin--third">The
								Adventure of the Noble Bachelor</p>
						</a>
					</li>
				</ul>


			</div>
		</div>


		<div class="group">
			<div class="group__item">

				<h3 class="small-caps">Components</h3>
				<h4 id="pagination" class="heading size--xl no-margin">
					Pagination &#10004;</h4>

			</div>
		</div>
		<div class="group">
			<div class="group__item group__item--secondary">

				<p>The Pagination component is used for displaying links to a sequence of pages.</p>

			</div>
			<div class="group__item group__item--primary">


				<ul class="inline-list pagination" role="navigation"
				    aria-label="Pagination">
					<li class="pagination__item">
						<a href="#">
							<span class="visuallyhidden">Page</span>1<span
								class="visuallyhidden">of 123</span>
						</a>
					</li>
					<li class="pagination__item">
						<span>&hellip;</span>
					</li>
					<li class="pagination__item">
						<a href="#">
							<span class="visuallyhidden">Page</span>40<span
								class="visuallyhidden">of 123</span>
						</a>
					</li>
					<li class="pagination__item">
						<a href="#" rel="prev">
							<span class="visuallyhidden">Page</span>41<span
								class="visuallyhidden">of 123</span>
						</a>
					</li>
					<li class="pagination__item">
						<span class="visuallyhidden">You&rsquo;re currently on page</span>42<span
							class="visuallyhidden">of 123</span>
					</li>
					<li class="pagination__item">
						<a href="#" rel="next">
							<span class="visuallyhidden">Page</span>43<span
								class="visuallyhidden">of 123</span>
						</a>
					</li>
					<li class="pagination__item">
						<a href="#">
							<span class="visuallyhidden">Page</span>44<span
								class="visuallyhidden">of 123</span>
						</a>
					</li>
					<li class="pagination__item">
						<span>&hellip;</span>
					</li>
					<li class="pagination__item">
						<a href="#">
							<span class="visuallyhidden">Page</span>123<span
								class="visuallyhidden">of 123</span>
						</a>
					</li>
				</ul>


			</div>
		</div>


		<div class="group">
			<div class="group__item">

				<h3 class="small-caps">Components</h3>
				<h4 id="quotes" class="heading size--xl no-margin">Quotes</h4>

			</div>
		</div>
		<div class="group">
			<div class="group__item group__item--secondary">

				<p>The Quote component is used for displaying content which is quoted from another source.</p>

			</div>
			<div class="group__item group__item--primary">


				<h4 class="heading size--xl subheading">Quotes</h4>

				<figure class="quote quote--block">
					<blockquote>
						<p>At three o’clock precisely I was at Baker Street, but
							Holmes had not yet returned. The
							landlady informed me that he had left the house
							shortly after eight o’clock in the
							morning.</p>
					</blockquote>
					<figcaption>
						<p class="quote__attribution">Sherlock Holmes</p>
					</figcaption>
				</figure>


			</div>
		</div>


		<div class="group">
			<div class="group__item">

				<h3 class="small-caps">Components</h3>
				<h4 id="share" class="heading size--xl no-margin">Share</h4>

			</div>
		</div>
		<div class="group">
			<div class="group__item group__item--secondary">

				<p>The Share component is used for displaying a list of social sharing links, allowing our visitors to easily share the page they
					are viewing.</p>
				<p>People also copy and paste the URL from the address bar so we make sure our URLs are short, memorable, hackable and people-centered.</p>

			</div>
			<div class="group__item group__item--primary">


				<!-- Share this -->
				<div class="towncrier">
					<a href="#share-this"
					   class="towncrier__share-button js-towncrier__share-button"
					   aria-label="Open share panel"
					   aria-expanded="false"
					   aria-haspopup="true">
						<svg class="icon towncrier__share-icon" aria-hidden="true">
							<use xlink:href="#share"/>
						</svg><span class="towncrier__share-text">Share this</span>
					</a>

					<!-- change aria-hidden to `true` if js -->
					<div class="towncrier__panel js-towncrier__panel"
					     id="share-this"
					     aria-hidden="true">

						<p class="heading size--xl towncrier__title" aria-hidden="true">Share this
							with</p>

						<ul class="towncrier__channels">
							<li class="towncrier__channel towncrier__channel--email">
								<a class="towncrier__channel-link"
								   href="mailto:?subject={SUBJECT}&amp;body={URL}">
									<svg class="icon towncrier__share-icon"
									     aria-hidden="true">
										<use xlink:href="#email"/>
									</svg><span class="towncrier__channel-label" aria-hidden="true">Email</span>
									<span class="visuallyhidden">Share this with Email</span>
								</a>
							</li>
							<li class="towncrier__channel towncrier__channel--facebook">
								<a class="towncrier__channel-link"
								   href="https://www.facebook.com/sharer/sharer.php?u={URL}">
									<svg class="icon towncrier__share-icon"
									     aria-hidden="true">
										<use xlink:href="#facebook"/>
									</svg><span class="towncrier__channel-label" aria-hidden="true">Facebook</span>
									<span class="visuallyhidden">Share this with Facebook</span>
								</a>
							</li>
							<li class="towncrier__channel towncrier__channel--twitter">
								<a class="towncrier__channel-link"
								   href="https://twitter.com/intent/tweet?text={TEXT}&amp;url={URL}">
									<svg class="icon towncrier__share-icon"
									     aria-hidden="true">
										<use xlink:href="#twitter"/>
									</svg><span class="towncrier__channel-label" aria-hidden="true">Twitter</span>
									<span class="visuallyhidden">Share this with Twitter</span>
								</a>
							</li>
							<li class="towncrier__channel towncrier__channel--pinterest">
								<a class="towncrier__channel-link"
								   href="https://uk.pinterest.com/pin/create/bookmarklet/?url={URL}&amp;description={DESCRIPTION}&amp;title={TITLE}&amp;media={IMAGE}">
									<svg class="icon towncrier__share-icon"
									     aria-hidden="true">
										<use xlink:href="#pinterest"/>
									</svg><span class="towncrier__channel-label" aria-hidden="true">Pinterest</span>
									<span class="visuallyhidden">Share this with Pinterest</span>
								</a>
							</li>
							<li class="towncrier__channel towncrier__channel--whatsapp">
								<a class="towncrier__channel-link"
								   href="whatsapp://send?text={TEXT - URL}%3Focid%3Dwsnews.chat-apps.in-app-msg.whatsapp.trial.link1_.auin">
									<svg class="icon towncrier__share-icon"
									     aria-hidden="true">
										<use xlink:href="#whatsapp"/>
									</svg><span class="towncrier__channel-label" aria-hidden="true">WhatsApp</span>
									<span class="visuallyhidden">Share this with WhatsApp</span>
								</a>
							</li>
							<li class="towncrier__channel towncrier__channel--linkedin">
								<a class="towncrier__channel-link"
								   href="https://www.linkedin.com/shareArticle?mini=true&url={URL}&title={TITLE}&summary={SUMMARY optional}&source={SOURCE optional}">
									<svg class="icon towncrier__share-icon"
									     aria-hidden="true">
										<use xlink:href="#linkedin"/>
									</svg><span class="towncrier__channel-label" aria-hidden="true">LinkedIn</span>
									<span class="visuallyhidden">Share this with LinkedIn</span>
								</a>
							</li>
							<li class="towncrier__channel towncrier__channel--google-plus">
								<a class="towncrier__channel-link"
								   href="https://plus.google.com/share?url={URL}">
									<svg class="icon towncrier__share-icon"
									     aria-hidden="true">
										<use xlink:href="#google-plus"/>
									</svg><span class="towncrier__channel-label" aria-hidden="true">Google +</span>
									<span class="visuallyhidden">Share this with Google plus</span>
								</a>
							</li>
						</ul>

						<button class="towncrier__close-button js-towncrier__share-button">
							<span class="visuallyhidden">Close share panel</span>
							<span class="towncrier__close-button-graphic"
							      aria-hidden="true">×</span>
						</button>
					</div>
				</div>
				<!-- / Share this -->


			</div>
		</div>


		<div class="group">
			<div class="group__item">

				<h3 class="small-caps">Components</h3>
				<h4 id="tables" class="heading size--xl no-margin">Tables</h4>

			</div>
		</div>
		<div class="group">
			<div class="group__item group__item--secondary">

				<p>The Table component is used for displaying tabular data.</p>
				<p>We use <a href="https://www.filamentgroup.com/lab/tablesaw.html">Tablesaw</a>, a group of jQuery plugins, to manage tables in a responsive layout.</p>

			</div>
			<div class="group__item group__item--primary">

				<table class="table table--primary">
					<thead>
					<tr>
						<th>Course</th>
						<th>Ring</th>
						<th>Position</th>
						<th>Price</th>
					</tr>
					</thead>
					<!-- tfoot comes before tbody -->
					<tfoot>
					<tr>
						<td>thingy</td>
						<td>sg</td>
						<td>tjhing</td>
						<td>sdh</td>
					</tr>
					</tfoot>
					<!-- tfoot comes before tbody -->
					<tbody>
					<tr>
						<td>Ascot</td>
						<td>Flat Tattersalls</td>
						<td><strong>£300,000</strong> Guide price</td>
						<td><a href="/link">Enquire</a></td>
					</tr>
					<tr>
						<td>Ascot</td>
						<td>Flat Tattersalls</td>
						<td><strong>£24,000</strong> (7 bids) <span
								class="alert">4 min left (Today 15:45)</span>
						</td>
						<td><a href="/link">Place bid</a></td>
					</tr>
					<tr>
						<td>Ascot</td>
						<td>Flat Tattersalls</td>
						<td>Offers</td>
						<td><a href="/link">Enquire</a></td>
					</tr>
					<tr>
						<td>Ascot</td>
						<td>Flat Tattersalls</td>
						<td><strong>£24,000</strong> (54 bids) span.</td>
						<td><a href="/link">Place bid</a></td>
					</tr>
					</tbody>
				</table>

			</div>
		</div>


		<div class="group">
			<div class="group__item">

				<h3 class="small-caps">Components</h3>
				<h4 id="tabs" class="heading size--xl no-margin">Tabs
					&#10004;</h4>

			</div>
		</div>
		<div class="group">
			<div class="group__item group__item--secondary">

			<p>The Tabs component is used for displaying grouped content. We use Tabs to alternate between views within the same context, not to navigate to different areas.</p>
			<p>We use jQuery to add the interactive parts and the ARIA attributes.</p>
			<p>We are careful and don&rsquo;t overuse the Tabs components. If people need to compare the info behind different tabs, then it&rsquo;s better to put everything on one big page.</p>

			</div>
			<div class="group__item group__item--primary">



				<h5 class="heading size size--xl subheading">Tabs with Javascript</h5>

				<!-- Accessible tabs -->
				<div class="js-tab-interface tab-interface">
					<ul>
						<li><a href="#tab-name-one">A Scandal in Bohemia</a>
						</li>
						<li><a href="#tab-name-two">The Red-Headed League</a>
						</li>
					</ul>
					<section id="tab-name-one">

						<h1 class="heading size--l">A Scandal in Bohemia</h1>
						<p>To Sherlock Holmes she is always the woman. I have
							seldom heard him mention her under any
							other name. In his eyes she eclipses and
							predominates the whole of her sex. It was not that
							he felt any emotion akin to love for Irene
							Adler.</p>
						<p>All emotions, and that one particularly, were
							abhorrent to his cold, precise but admirably
							balanced mind. He was, I take it, the most perfect
							reasoning and observing machine that the
							world has seen, but as a lover he would have placed
							himself in a false position. He never
							spoke of the softer passions, save with a gibe and a
							sneer.</p>

					</section>
					<section id="tab-name-two">

						<h1 class="heading size--l">The Red-Headed League</h1>
						<p>At three o’clock precisely I was at Baker Street, but
							Holmes had not yet returned. The
							landlady informed me that he had left the house
							shortly after eight o’clock in the morning.
							I sat down beside the fire, however, with the
							intention of awaiting him, however long he
							might be.</p>
						<p>I was already deeply interested in his inquiry, for,
							though it was surrounded by none of the
							grim and strange features which were associated with
							the two crimes which I have already
							recorded, still, the nature of the case and the
							exalted station of his client gave it a
							character of its own.</p>

					</section>
				</div>
				<!-- / Accessible tabs -->


				<h5 class="heading size size--xl subheading">Tabs without Javascript</h5>

				<!-- Accessible tabs -->
				<div class="tab-interface">
					<ul>
						<li><a href="#tab-name-one">A Scandal in Bohemia</a>
						</li>
						<li><a href="#tab-name-two">The Red-Headed League</a>
						</li>
					</ul>
					<section id="tab-name-one">

						<h1 class="heading size--l">A Scandal in Bohemia</h1>
						<p>To Sherlock Holmes she is always the woman. I have
							seldom heard him mention her under any
							other name. In his eyes she eclipses and
							predominates the whole of her sex. It was not that
							he felt any emotion akin to love for Irene
							Adler.</p>
						<p>All emotions, and that one particularly, were
							abhorrent to his cold, precise but admirably
							balanced mind. He was, I take it, the most perfect
							reasoning and observing machine that the
							world has seen, but as a lover he would have placed
							himself in a false position. He never
							spoke of the softer passions, save with a gibe and a
							sneer.</p>

					</section>
					<section id="tab-name-two">

						<h1 class="heading size--l">The Red-Headed League</h1>
						<p>At three o’clock precisely I was at Baker Street, but
							Holmes had not yet returned. The
							landlady informed me that he had left the house
							shortly after eight o’clock in the morning.
							I sat down beside the fire, however, with the
							intention of awaiting him, however long he
							might be.</p>
						<p>I was already deeply interested in his inquiry, for,
							though it was surrounded by none of the
							grim and strange features which were associated with
							the two crimes which I have already
							recorded, still, the nature of the case and the
							exalted station of his client gave it a
							character of its own.</p>

					</section>
				</div>
				<!-- / Accessible tabs -->


			</div>
		</div>


		<div class="group">
			<div class="group__item">

				<h3 class="small-caps">Components</h3>
				<h4 id="taxonomies" class="heading size--xl no-margin">
					Taxonomies</h4>

			</div>
		</div>
		<div class="group">
			<div class="group__item group__item--secondary">


				<p>The Taxonomy component is used for displaying a list of related links through our
					taxonomies.</p>

			</div>
			<div class="group__item group__item--primary">

				<ul class="taxonomies">
					<li><a class="taxonomy" href="#">Taxonomy</a></li>
					<li><a class="taxonomy" href="#">Taxonomy</a></li>
					<li><a class="taxonomy" href="#">Taxonomy</a></li>
					<li><a class="taxonomy" href="#">Taxonomy</a></li>
					<li><a class="taxonomy" href="#">Taxonomy</a></li>
					<li><a class="taxonomy" href="#">Taxonomy</a></li>
					<li><a class="taxonomy" href="#">Taxonomy</a></li>
				</ul>

			</div>
		</div>


		<div class="group">
			<div class="group__item">

				<h3 class="small-caps">Components</h3>
				<h4 id="videos" class="heading size--xl no-margin">Videos</h4>

			</div>
		</div>
		<div class="group">
			<div class="group__item group__item--secondary">

				<p>The Video component is used for displaying moving visual images. It supports third-party content from e.g. Youtube or Vimeo.</p>

			</div>
			<div class="group__item group__item--primary">

				<figure class="media media--video media--video-16:9">
					<iframe width="560" height="315"
					        src="https://www.youtube.com/embed/NpEaa2P7qZI"
					        frameborder="0"
					        allowfullscreen></iframe>
				</figure>

			</div>
		</div>

	</section>
	<!-- / Components -------------------------------------------------- -->


	<!-- Templates intro -------------------------------------------------- -->
	<section class="island island--fullpage">
		<div class="group">
			<div class="group__item group__item--primary">

				<h1 class="heading size--xxxl">Templates</h1>
				<div class="lead">
					<p>Groups of Components are called Templates. Most pages are
						created by choosing a Templates, some
						allow you to choose Components as well and then completing
						the page with content.</p>
				</div>

			</div>
		</div>
	</section>
	<!-- / Templates intro -------------------------------------------------- -->


	<!-- Templates -------------------------------------------------- -->
	<section>


		<div class="group">
			<div class="group__item">

				<h3 class="small-caps">Templates</h3>
				<h3 id="t-example-template" class="heading size--xl no-margin">
					Example template</h3>

			</div>
		</div>
		<div class="group">
			<div class="group__item group__item--secondary">

				<p>The Example template is used to illustrate how templates are
					included in the Guide.</p>

			</div>
			<div class="group__item group__item--primary">

				<p>Example template.</p>

				<p><a href="/accommodations">View live Example template</a></p>

				<figure class="media media--video media--video-16:9">
					<iframe style="transform: scale(1);" src="/example-template"
					        frameborder="0"></iframe>
				</figure>

			</div>
		</div>


	</section>
	<!-- / Templates -------------------------------------------------- -->


</main>
<!-- / Main -->


<?php require_once( $_SERVER['DOCUMENT_ROOT'] . '/_includes/global-footer.html' ); ?>
<?php require_once( $_SERVER['DOCUMENT_ROOT'] . '/_includes/scripts__footer.html' ); ?>

</body>
</html>

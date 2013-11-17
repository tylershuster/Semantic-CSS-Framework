<?php $pageTitle = "Home"; include "phpartials/header.php"; ?>
	<main>
		<header class="color-drawer inset">
			<figure>
				<h1 class="uber">The Semantic CSS Framework</h1>
				<h2>A popular opinionated CSS framework for rapid style development</h2>
				<h3>Current Version: alpha</h3>
				<div>
					<button><a href="custom_build.html">Custom Build</a></button>
					<button><a href="https://github.com/herrshuster/Semantic-CSS-Framework">GitHub</a></button>
				</div>			
			</figure>			
		</header>
		<div class="nav inheader inbody">
			<address>
					<a href="http://facebook.com/herrshuster"></a>
					<a href="http://twitter.com/tylershuster"></a>
					<a href="https://plus.google.com/104346126731383465661"></a>
			</address>			
			<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="semantics.php">Semantics</a></li>
					<li><a href="typography.php">Typography</a></li>
					<li><a href="header.php">Header</a></li>
					<li>
						<a href="elements.php">Elements</a>
						<ul>
							<li><a href="elements.php#article">Article</a></li>
							<li><a href="elements.php#forms">Forms</a></li>
							<li><a href="elements.php#patterns">Design Patterns</a></li>
						</ul>
					</li>
					<div></div>
					<li><a href="reference.php">Reference</a></li>
			</ul>
		</div>
		<table class="feature">
		<tbody>
			<tr>
				<td>
					<h3>Semantic</h3>
					<p>The Semantic CSS Framework allows you to write completely semantic HTML and produce a working page. It uses Sass, BEM, and input from hundreds of designers, who can be found <a href="inspiration.php">here</a></p>
				</td>
				<td>
					<h3>Atomic</h3>
					<p>In <a href="http://bradfrostweb.com/blog/post/atomic-web-design/">this article</a>, Brad Frost outlines the principles of atomic design. What it comes down to is seeing the page as a series of fractal iterations: each within the other.</p>
				</td>
				<td>
					<h3>Live Edits</h3>
					<p>With Sass 3.3 and <a href="https://developers.google.com/chrome-developer-tools/docs/css-preprocessors">Chrome sourcemaps</a>, it's possible to edit the Sass live on the page. Check it out on this page! </p>
				</td>
				<td>
					<h3>Musical</h3>
					<p>The Semantic CSS Framework uses musical typography. Learn more about musical typography <a href="typography.php">here</a></p>
				</td>
				<td>
					<h3>Prototype</h3>
					<p>Easily create a working prototype of a site by writing pure HTML</p>
				</td>
				<td>
					<h3>Scaffold</h3>
					<p>Use the Semantic CSS Framework as a starting point: use the atomic structure to quickly develop custom components and develop your own style</p>
				</td>				
			</tr>
		</tbody>
		</table>
		<article id="overview">
			<header class="leaderboard">
				<h1 class="uber"><small><em>the</em></small> Semantic CSS Framework</h1>
				<h2>A popular opinionated CSS framework for rapid style development</h2>
			</header>
			<p>The majority of websites all use a number of common elements arranged into a finite number of patterns, as you can clearly see on sites like <a href="http://www.patterntap.com">Pattern Tap</a>. These common elements correspond either to a single HTML tag or a pattern of tags, such as <code>header>nav>ul</code>, <code>fieldset>form[text],form[password]</code>, or others. The Semantic CSS Framework seeks to be a foundation for creating unique semantic stylesheets. By modifying a set of variables, the Semantic CSS Framework generates CSS that styles the default elements and related patterns. Once the base CSS file is generated, the developer can modify it further to support additional features.</p>
			<p>The Semantic CSS Framework is responsive with many mobile-first constructs to make it run quickly. It has no official grid system, though there are certainly plenty to choose from. For strong responsive grids in SASS, I recommend Singularity.gs.</p>
			<p>The Semantic CSS Framework takes the opinions of hundreds of developers and works their best practices into code. I will continue to update the code with references to its inspiration, but some of my major influences (links to come when I launch) have been Chris Coiyer of CSS Tricks, Harry Roberts of CSS Wizardry, and Mike Lane for his excellent Twitter feed.</p>
		</article>
		<article id="semantics">
			<h1>Semantic Foundation</h1>
			<h2>99% Classless, 100% Semantic</h2>
			<p>The basic markup for a number of common patterns can be found <a href="example.html">here</a>.</p>
			<p>In order to move towards a more open web, existing standards should be adhered to in order that new standards can be explored. While the creativity of many designers with the <code>div</code> element is admirable, having endless sets of nested divs with "grid-" classes applied does nothing to move towards a web of interoperability and the free exchange of information.</p>
			<p>The Semantic CSS Framework does the heavy lifting for you, allowing you to write entire webpages as easily as you would a complicated document. With emmet, it's easier than Markdown!</p>
		</article>
		<article id="typography">
			<h1>Musical Typography</h1>
			<h2>Conducting the New Canon</h2>
			<p>If you haven't read "Composing the New Canon," I suggest you read it now.</p>
			<p>The idea that typographical ratios can be calculated from musical ratios is an old one. The Semantic CSS Framework makes those ratios easily accessible. You can either compile a stylesheet with a specific ratio or use the classy.css file to apply classes like "e augmin7" to elements to style the contained ratios. Examples will be below:</p>
		</article>		
	</main>
	<?php include "phpartials/footer.php"; ?>
</body>
		<script src="javascripts/scripts.js"></script>

</html>

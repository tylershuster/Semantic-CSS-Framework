<?php include "phpartials/header.php"; ?>
	<main>
		<section class="uber hero">
			<span>
				<h1>Typography</h1>
				<h2>Webpage as Composition</h2>
			</span>
		</section>
		<article>			
			<h3>Musical Typography</h3>
			<p>One of the aims of modern web design is for <a href="http://alistapart.com/article/more-meaningful-typography">more meaningful typography</a>. However, designing with standard modular scales has its limitations.</p>
			<p>Its primary problem is its predictability. Using the golden ratio to set typographic ratios is a time-tested tradition, but it results in web pages with a very familiar feel. While this may be optimal at times, what are we to do when we want to set a page's type with a different mood? Fortunately, there is already a set of ratios that is used to established moods. It's the musical scale.</p>
			<p>The musical scale has two components: key and quality. The key of a musical scale determines the root note. Its quality defines the specific ratios that can be used to produce notes. We have similar typographic conventions. The rem unit is calculated from the "Root EleMent" font-size, and the quality can be seen as the ratios of h1-h6. The Semantic CSS framework converts established musical ratios based on these conventions.</p>
			<aside>This is not the first time this has been done. See the excellent <a href="http://24ways.org/2011/composing-the-new-canon/">Composing the New Canon</a> for a more detailed exploration.</aside>
			<p>It does this through the use of SASS. When compiling the stylesheet, typographic ratios are calculated based on the ratio between notes in the chosen quality, for example domsharp9. The key sets the root element size, with C being 100%. Because the rest of the units in the stylesheet are calculated from this root element, changing the key will affect every part of the document. It also means that user zoom level will fundamentally change the layout of the page. If a user zooms so that their screen is effectively as wide as a tablet, they will use the tablet interface, and so on.</p>
			<aside>The <a href="header.html">header</a> is calculated based on rems as well.</aside>
			<p>Using different ratios doesn't mean a break from the baseline grid, however. The baseline grid is set by the key. The SASS mixin includes the calculations to ensure that every element rests on the correct baseline.</p>
			<h3>Composing User Flow</h3>
			<p>One result of using musical typography is that each page has essentially one chord that it is set in. And in the same way that songs are formed from chord progressions, so can webpages be formed from typographic progressions. The mood of the page will match the mood of the chord. For instance, a landing page should be dominant, while a disambiguation page should be sustained. By staying in the same key but changing chords, the root element and therefore the layout of the page will stay the same, but the typographic "feel" will progress with the site.</p>
			<h4>Further Reading:</h4>
			<ul>
				<li><a href="http://viljamis.com/blog/2012/typography/">On Typography</a> - Viljami Salminen</li>
			</ul>
		</article>
		<article>
			<section id="swatches">
			<!--background for background of whole swatch, drawer for each figure - vice versa-->
				<p id="color-description"></p>
				<div class="colors row">
					<figure id="primary-swatch">
						<div class="swatch"></div>
						<figcaption>primary color</figcaption>
					</figure>
					<figure id="secondary-swatch">
						<div class="swatch"></div>
						<figcaption>secondary color</figcaption>
					</figure>
					<figure id="tertiary-swatch">
						<div class="swatch"></div>
						<figcaption>tertiary color</figcaption>
					</figure>
					<figure id="accent-swatch">
						<div class="swatch"></div>
						<figcaption>accent color</figcaption>
					</figure>
				</div>
				<p id="musical-typography"></p>
				<div class="headers row">
					<figure><h1><small><em>the</em></small>Primary Header</h1></figure>
					<figure><h2><small><em>the</em></small>Secondary Header</h2></figure>
					<figure><h3><small><em>the</em></small>Tertiary Header</h3></figure>
					<figure><h4><small><em>the</em></small>Quaternary Header</h4></figure>
					<figure><h5><small><em>the</em></small>Quinary Header</h5></figure>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, laudantium, ullam, natus fugit aspernatur aliquam voluptatem earum nesciunt necessitatibus magni et fuga nostrum quae exercitationem veritatis nisi minima sed impedit.</p>
				<div class="uber row">
					<figure><h1><small><em>the</em></small>Primary Header</h1></figure>
					<figure><h2><small><em>the</em></small>Secondary Header</h2></figure>
					<figure><h3><small><em>the</em></small>Tertiary Header</h3></figure>
					<figure><h4><small><em>the</em></small>Quaternary Header</h4></figure>
					<figure><h5><small><em>the</em></small>Quinary Header</h5></figure>
				</div>
				<p class="uber">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, laudantium, ullam, natus fugit aspernatur aliquam voluptatem earum nesciunt necessitatibus magni et fuga nostrum quae exercitationem veritatis nisi minima sed impedit.</p>
			</section>
		</article>		
	</main>
	
</body>
		<script src="javascripts/scripts.js"></script>

</html>


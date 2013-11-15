<?php $pageTitle = "Documentation"; include "phpartials/header.php"; ?>
<main>
<nav>
	<ul>
		<li>
			<a href=""></a>
			<ul>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</li>
		<li>
			<a href=""></a>
			<ul>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</li>
		<li>
			<a href=""></a>
			<ul>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</li>
	</ul>
</nav>
<article>
	<p>The SCF uses patterns to style semantically marked-up text. Most of these patterns you will be intuitively used to, such as body>header>img+h1+nav>ul>li*5, although some will be more obscure. </p>
	<p>There are enough grid frameworks on the market today, and anyone who wants to do precision work knows how to create their own grids in sass. As a result, there are a few grid options: The default option is the row class. Give a parent element a class of "row" and the children will respond to the screen size. This pattern also works in other situations, like fieldsets and XX? It's a very basic breakdown, so it's only for content that doesn't need much styling. For more advanced geometry I recommend singularity gs, as it's easy to integrate with SCF.</p>
	<p>Typography: The SCF uses Google Web Fonts and the @import rule to theme fonts. If you're using a link tag to pull in your fonts, just put the name of the font in the $sans or $serif variables.</p>
	<p>skeu: the visual language of the page can be rapidly changed via the $skeu variable. Choices currently are: flat, faux-flat, or cartoon. This is a combined variable which sets shadow size and border behavior to make the design have a particular physical metaphor.</p>
	<p>The class "color-(any ROYGBIV)" can be used to style elements. It will also make the element an "object," which means that it behaves according to the "physical rules" set forth by $skeu.</p>
	<p>Buttons can be grouped by putting them next together. This is achieved via button+button and button:nth-last-of-type(n+2) to ensure that corner behavior is maintained. I like wrapping buttons in a fieldset for semantic purposes.</p>
	<p>The SCF uses jQuery for a few of its animations, specifically those that respond to scrolling. It's not required to use the framework, although it fixes a few glitches that might become annoying. </p>
	<p>include 	<meta name="viewport" content="width=device-width height=device-height initial-scale=1.0" /> in your head to make sure that it displays proper responsive layout on all devices</p>
	<p>The SCF uses Normalize</p>



</article>
<article>
	blockquote>img+p
	figure>img+figcaption
	fieldset>hr+div+fieldset>form^+.row+form>label+input
</article>
</main>
</body>
</html>
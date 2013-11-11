<?php $pageTitle = "Semantics"; include "phpartials/header.php"; ?>
	<main>
		<section class="hero">
			<h1>Semantics</h1>
		</section>
		<article>
			<h2>More Meaningful Stylesheets</h2>
			<h3>No More Classism!</h3>	
			<p>An important convention of web design is <a href="http://www.w3schools.com/web/web_semantic.asp">semantics</a>. Ideally, the HTML for a page would contain nothing but markup. Each component of the page would be "marked up" with its type, like <code>&lt;article&gt;</code>, <code>&lt;header&gt;</code>, or <code>&lt;button&gt;</code>. Classes should be sparsely applied, as each element is likely to look the same throughout the site. But when pages are marked up using obscene amounts of nested divs, the semantics of the page are completely lost. A <code>&lt;div&gt;</code> is simply a division, and provides no clue as to its content.</p>					
			<h3>Design Patterns</h3>
			<p>The answer to this problem is design patterns. Users will never see <code>button class="tiny round"</code>," or <code>figure class="carousel"</code>, but they will see a button at the end of a contact form, and they will see an image carousel. The markup for each distinct visual element will usually follow a unique pattern. For instance, a <code>figure > ol > li x 10 > img</code> is inherently a slideshow. There is no other conceivable visual element that will be a series of ordered images inside a figure. Therefore, why use classes? They can be helpful for rapid prototyping, but serve no purpose in deployment.</p>
			<p>The Semantic CSS Framework is based on these design patterns. Its philosophy is that 99% of all conceivable elements can be selected in CSS using these design patterns. There are a number of classes, but they are semantic. By this I mean that any class names not only describe the visual appearance of the element, but also its function &amp; content. For instance, "row" is a fairly semantic class name IF it is only used to describe a group of elements whose width is 100%. <code>section.colophon</code> is also semantic, as there is no colophon element, but colophons are to be displayed differently than other footer text. <code>article > aside.author</code> behaves in a similar fashion.</p>
			<p>The Semantic CSS Framework is therefore very opinionated. That is, the code patterns are largely unalterable without a significant amount of restructuring. But in writing it, I have no desire to impose my opinions on its userbase. As many conventions as possible are just that: conventions. They are patterns that have been used by web designers for decades, or they are intuitively accurate. It boils down to this: if you want to do something different than what everyone else is doing, don't use a framework. If you're fine with doing the same thing as everyone else, at least agree on a way it should be done. The Semantic CSS Framework attempts to encapsulate what designers have come to agree on.</p>
			<h4>Further Reading:</h4>
			<ul>
				<li><a href="http://css-tricks.com/semantic-class-names/">Semantic Class Names</a> - CSS Tricks</li>
				<li><a href="http://coding.smashingmagazine.com/2013/08/20/semantic-css-with-intelligent-selectors/">Semantic CSS With Intelligent Selectors</a> - Smashing Magazine</li>
			</ul>	
			
			
		</article>
	</main>
	<?php include "phpartials/footer.php"; ?>
			<script src="javascripts/scripts.js"></script>

</body>

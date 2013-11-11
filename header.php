<?php $pageTitle = "Header"; include "phpartials/header.php"; ?>
	<main>
		<section class="hero">
			<h1>A Semantic Header</h1>			
		</section>
		<article>
			<h2>Standard Design Pattern</h2>
			<p>One of the most prominent features of every site is the header. The header provides design unity. Sites should be distinguishable via their header, and it should not vary significantly from page to page.</p>
			<p>The header also generally follows a very predictable design pattern: <code>header &gt; img, h1, nav &gt; ul &gt; li &gt; a</code>. This provides a header with a logo, descriptive text, and a navigation bar with a number of links inside. Within each of these <code>&lt;li&gt;</code>s could also be dropdowns in the form of a<code>&lt;ul&gt;</code>. The Semantic CSS Framework makes it possible to write code as simply as that, which will then be aligned in a conventional manner.</p>
			<h2>Ancillaries</h2>
			<h3>Address</h3>
			<p>There are a number of elements besides a basic navigation menu that often make their way into a site header. The first is the <code>address</code> element, which contains information about the publisher of the webpage, including links to social networks. The Semantic CSS Framework already applies the appropriate icons to social links inside an <code>address</code> element via the wildcard selector: <code>a[href*="website.com/"]</code>. When placed in the header, the contents are position on the conventional right side of the screen.</p>
			<h3>User</h3>
			<p>Sites with users traditionally have a login | register section in the upper-right-hand corner. The Semantic CSS Framework places these links via the <code>header &gt; section.user</code> pattern. Implementation of this feature is partial.</p>
			<h3>Search</h3>
			<p>Sites often have a search bar in the header as well, and this can be accessed via <code>section.search</code>. Future versions will only rely on <code>input[type="search"]</code> for styling. On mobile, the form collapses into a pure CSS search icon which expands on focus.</p>
			<h3>Masthead</h3>
			<p>The default styling for the header logo and text places it on the left of the screen. By applying <code>section.masthead</code>, the framework will center the site information instead. Not currently working.</p>
			<h2>List Divisions</h2>
			<p>When writing a header, it is sometimes necessary to divide navigation items by category. By putting a blank <code>div</code> element into the <code>ul</code>, the framework applies a visual divider between elements, whether in the primary navigation or a dropdown.</p>
			<h2>Responsive Header</h2>
			<p>The Semantic CSS Framework header is also completely responsive in pure CSS. While it relies on the "<a href="http://css-tricks.com/the-checkbox-hack/">checkbox hack</a>," it is still as browser-compatible as the rest of the framework. On mobile devices, the navigation collapses and a "hamburger" style icon appears in the upper-left corner, as per convention. All functions of header are retained, including nested dropdowns and list divisions.</p>
		</article>
	</main>
	<?php include "phpartials/footer.php"; ?>
			<script src="javascripts/scripts.js"></script>

</body>

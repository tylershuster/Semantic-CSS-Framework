style.css
=========
##Overview
Style.css is an amibitous project that's part of a much larger whole. The goal of this stylesheet is to create a "new normalize." The CSS and HTML specifications are great, but designers have largely fucked things up by adding non-semantic classes and endless tweaks to get their designs to look exactly the way they want them. This creates a number of problems. Style.css specifies a no-nonsense, consensus-based way to style any webpage. Users can choose the color of the page, the musical key to set it in (more on that later), and style.scss generates the css to style an entire semantic website. Because it only uses semantic classes, customization is limited, but I think that you will find it's also unnecessary. 

Note: Style.css is very opinionated and uses nested selectors for almost everything. While it may be against personal preference for many, the purpose of style.css is to be have the opinion of the majority. As the web has aged, we've seen de facto standards arise, such as the general header structure, links to other articles, or navigation styles. Style.css combines the best practices from around the web into a sort of super-opinion - consensus gentium - the agreement of the people. Future versions will use a wiki-based system in order to promote forward-compatibility as new conventtions arise.

##Grid
Style.css doesn't use a traditional grid, due largely to how opinionated it is. Instead, all data is laid out according to its content. Inside an article, for example, there might be blockquotes, figures with captions, and asides from the text. Style.css takes a content-agnostic view of semantically-correct text and styles each element accordingly, and then alternates left and right floats with a 38% width. If there's a sidebar on the page, it also has a width of 38%
###Phi
38 & 62, as well as the Fibonacci sequence are used to construct most of the ratios in style.css. These occur naturally in the physical world and designers have realized their implications in the artificial world. Because it's based on these ratios, there's no need for a traditional 12-column grid system. The grid evolves as the user browses content: when looking at the page as a whole, they'll see a 62%-38% split. When they read the article (62%), they'll then see another 62%-38% split where the text is the 62% and the image the 38%.
###Responsive
Style.css includes semantic.gs, which allows for a responsive grid by including the grid in the style of each element affected by the grid. While this may be cumbersome for some, it's perfect for styling individual elements to behave in certain ways. For instance, article>figure will be 38% of the article width when on a screen that supports it, but will expand to 100% of the article width when not.
###Baseline
And of course the whole thing is aligned to a baseline of 1em.

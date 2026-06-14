<?php
/**
 * Title: Story Hero
 * Slug: masthead/story-hero
 * Categories: masthead-layouts
 * Viewport Width: 1280
 * Inserter: true
 *
 * Full-width story hero with large headline, deck, and byline row.
 * Use as the opening block of a long-form article or feature piece.
 *
 * @package masthead
 */
?>
<!-- wp:group {"tagName":"article","className":"np-story-hero np-pattern-story-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"backgroundColor":"paper-off-white","layout":{"type":"constrained","contentSize":"720px"}} -->
<article class="wp-block-group np-story-hero np-pattern-story-hero has-paper-off-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- wp:paragraph {"className":"np-eyebrow","style":{"typography":{"fontSize":"var:preset|font-size|xs","fontFamily":"var:preset|font-family|inter","fontWeight":"700","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|accent-red"}}} -->
	<p class="wp-block-paragraph np-eyebrow has-accent-red-color has-text-color" style="font-family:var(--wp--preset--font-family--inter);font-size:var(--wp--preset--font-size--xs);font-weight:700;letter-spacing:0.1em;text-transform:uppercase">Politics &amp; Policy</p>
	<!-- /wp:paragraph -->

	<!-- This pattern supplies the page's single h1 (the story headline below).
	     Insert it on a template that does not already render an h1 — pairing it
	     with another h1 block (or with a page using page.html, which carries its
	     own title h1) produces two h1s and breaks the WCAG 2.1 1.3.1 single-h1
	     guarantee. On a layout that already has an h1, demote this heading to
	     level:2 in the block toolbar. -->
	<!-- wp:heading {"level":1,"className":"np-story-hero__headline","style":{"typography":{"fontSize":"var:preset|font-size|4xl","fontFamily":"var:preset|font-family|playfair-display","fontWeight":"700","lineHeight":"1.08","letterSpacing":"-0.02em"},"color":{"text":"var:preset|color|ink-primary"},"spacing":{"margin":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|5"}}}} -->
	<h1 class="wp-block-heading np-story-hero__headline has-ink-primary-color has-text-color" style="font-family:var(--wp--preset--font-family--playfair-display);font-size:var(--wp--preset--font-size--4xl);font-weight:700;line-height:1.08;letter-spacing:-0.02em;margin-top:var(--wp--preset--spacing--4);margin-bottom:var(--wp--preset--spacing--5)">New Legislation Would Reshape How Cities Fund Public Transit</h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"className":"np-story-hero__deck","style":{"typography":{"fontSize":"var:preset|font-size|lg","fontFamily":"var:preset|font-family|lora","fontStyle":"italic","lineHeight":"1.55"},"color":{"text":"var:preset|color|ink-secondary"},"spacing":{"margin":{"bottom":"var:preset|spacing|8"}}}} -->
	<p class="wp-block-paragraph np-story-hero__deck has-ink-secondary-color has-text-color" style="font-family:var(--wp--preset--font-family--lora);font-size:var(--wp--preset--font-size--lg);font-style:italic;line-height:1.55;margin-bottom:var(--wp--preset--spacing--8)">A sweeping infrastructure bill moving through committee could redirect billions in federal dollars — and set off a reckoning for cities that have long relied on fare revenue to keep the lights on.</p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"className":"np-story-hero__meta","style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","alignItems":"center"}} -->
	<div class="wp-block-group np-story-hero__meta" style="gap:var(--wp--preset--spacing--4)">

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","alignItems":"center"}} -->
		<div class="wp-block-group" style="gap:var(--wp--preset--spacing--3)">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|xs","fontFamily":"var:preset|font-family|inter","fontWeight":"600"},"color":{"text":"var:preset|color|ink-primary"}}} -->
			<p class="wp-block-paragraph has-ink-primary-color has-text-color" style="font-family:var(--wp--preset--font-family--inter);font-size:var(--wp--preset--font-size--xs);font-weight:600">Margaret L. Donovan</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|xs","fontFamily":"var:preset|font-family|inter"},"color":{"text":"var:preset|color|ink-muted"}}} -->
		<p class="wp-block-paragraph has-ink-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--inter);font-size:var(--wp--preset--font-size--xs)">June 8, 2026 &nbsp;&middot;&nbsp; 8 min read</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

</article>
<!-- /wp:group -->

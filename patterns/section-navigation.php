<?php
/**
 * Title: Section Navigation
 * Slug: masthead/section-navigation
 * Categories: masthead-site
 * Viewport Width: 1280
 * Inserter: true
 *
 * Pattern: Section Navigation
 *
 * Horizontal section bar on the dark ink ground — News through Sports in
 * Inter bold caps. The active section carries a top accent-red indicator
 * and brighter text; swap the indicator to the current section on insertion.
 *
 * @package masthead
 */
?>
<!-- wp:group {"tagName":"nav","className":"np-section-nav np-pattern-section-navigation","metadata":{"categories":["masthead-site"],"name":"Section Navigation"},"ariaLabel":"Sections","style":{"color":{"background":"var:preset|color|ink-primary","text":"var:preset|color|paper-white"},"spacing":{"padding":{"left":"var:preset|spacing|4","right":"var:preset|spacing|4"}},"border":{"bottom":{"color":"var:preset|color|ink-secondary","style":"solid","width":"1px"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<nav class="wp-block-group np-section-nav np-pattern-section-navigation" aria-label="Sections" style="border-bottom:1px solid var(--wp--preset--color--ink-secondary);color:var(--wp--preset--color--paper-white);background-color:var(--wp--preset--color--ink-primary);padding-left:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4)">

	<!-- wp:group {"className":"np-section-nav__list","style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left","verticalAlignment":"center"}} -->
	<div class="wp-block-group np-section-nav__list">

		<!-- wp:paragraph {"className":"np-section-nav__item is-active","fontSize":"sm","fontFamily":"inter","textColor":"paper-white","style":{"typography":{"fontWeight":"700","letterSpacing":"0.06em","textTransform":"uppercase"},"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5"}},"border":{"top":{"color":"var:preset|color|accent-red","style":"solid","width":"3px"}}}} -->
		<p class="np-section-nav__item is-active has-paper-white-color has-text-color has-inter-font-family has-sm-font-size" style="border-top:3px solid var(--wp--preset--color--accent-red);padding-top:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);font-weight:700;letter-spacing:0.06em;text-transform:uppercase"><a href="/news" aria-current="page">News</a></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"className":"np-section-nav__item","fontSize":"sm","fontFamily":"inter","textColor":"ink-faint","style":{"typography":{"fontWeight":"700","letterSpacing":"0.06em","textTransform":"uppercase"},"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5"}}}} -->
		<p class="np-section-nav__item has-ink-faint-color has-text-color has-inter-font-family has-sm-font-size" style="padding-top:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);font-weight:700;letter-spacing:0.06em;text-transform:uppercase"><a href="/politics">Politics</a></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"className":"np-section-nav__item","fontSize":"sm","fontFamily":"inter","textColor":"ink-faint","style":{"typography":{"fontWeight":"700","letterSpacing":"0.06em","textTransform":"uppercase"},"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5"}}}} -->
		<p class="np-section-nav__item has-ink-faint-color has-text-color has-inter-font-family has-sm-font-size" style="padding-top:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);font-weight:700;letter-spacing:0.06em;text-transform:uppercase"><a href="/business">Business</a></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"className":"np-section-nav__item","fontSize":"sm","fontFamily":"inter","textColor":"ink-faint","style":{"typography":{"fontWeight":"700","letterSpacing":"0.06em","textTransform":"uppercase"},"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5"}}}} -->
		<p class="np-section-nav__item has-ink-faint-color has-text-color has-inter-font-family has-sm-font-size" style="padding-top:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);font-weight:700;letter-spacing:0.06em;text-transform:uppercase"><a href="/culture">Culture</a></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"className":"np-section-nav__item","fontSize":"sm","fontFamily":"inter","textColor":"ink-faint","style":{"typography":{"fontWeight":"700","letterSpacing":"0.06em","textTransform":"uppercase"},"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5"}}}} -->
		<p class="np-section-nav__item has-ink-faint-color has-text-color has-inter-font-family has-sm-font-size" style="padding-top:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);font-weight:700;letter-spacing:0.06em;text-transform:uppercase"><a href="/tech">Tech</a></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"className":"np-section-nav__item","fontSize":"sm","fontFamily":"inter","textColor":"ink-faint","style":{"typography":{"fontWeight":"700","letterSpacing":"0.06em","textTransform":"uppercase"},"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5"}}}} -->
		<p class="np-section-nav__item has-ink-faint-color has-text-color has-inter-font-family has-sm-font-size" style="padding-top:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);font-weight:700;letter-spacing:0.06em;text-transform:uppercase"><a href="/sports">Sports</a></p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

</nav>
<!-- /wp:group -->

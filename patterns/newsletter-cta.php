<?php
/**
 * Title: Newsletter CTA
 * Slug: masthead/newsletter-cta
 * Categories: masthead-cta
 * Viewport Width: 1280
 * Inserter: true
 *
 * Pattern: Newsletter CTA
 *
 * Subtle left-border treatment on a light background. Works in the sidebar
 * and as a full-width break between sections.
 *
 * @package masthead
 */
?>
<!-- wp:group {"className":"np-newsletter np-pattern-newsletter","metadata":{"categories":["masthead-cta"],"name":"Newsletter CTA"},"style":{"color":{"background":"var:preset|color|paper-light"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-group np-newsletter np-pattern-newsletter" style="background-color:var(--wp--preset--color--paper-light)">

	<!-- wp:group {"style":{"border":{"left":{"color":"var:preset|color|accent-red","style":"solid","width":"4px"}},"spacing":{"padding":{"left":"var:preset|spacing|8"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="border-left:4px solid var(--wp--preset--color--accent-red);padding-left:var(--wp--preset--spacing--8)">

		<!-- wp:paragraph {"className":"np-newsletter__eyebrow","style":{"typography":{"fontFamily":"var:preset|font-family|inter","fontSize":"0.7rem","fontWeight":"800","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|accent-red"}}} -->
		<p class="np-newsletter__eyebrow" style="color:var(--wp--preset--color--accent-red)">Daily Briefing</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|playfair-display","fontSize":"clamp(1.5rem,3vw,2rem)","fontWeight":"700","lineHeight":"1.2"},"spacing":{"margin":{"bottom":"0.75rem"}}}} -->
		<h2>Never miss the story that matters.</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|ink-secondary"},"typography":{"fontFamily":"var:preset|font-family|lora"},"spacing":{"margin":{"bottom":"var:preset|spacing|6"}}}} -->
		<p style="color:var(--wp--preset--color--ink-secondary)">Thousands of readers start their morning with our free daily digest. Join them.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"style":{"color":{"background":"var:preset|color|accent-red","text":"var:preset|color|paper-white"}}} -->
			<div class="wp-block-button">
				<a class="wp-block-button__link wp-element-button" href="#">Subscribe — It&rsquo;s Free</a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->

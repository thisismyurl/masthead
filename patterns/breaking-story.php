<?php
/**
 * Title: Breaking Story
 * Slug: masthead/breaking-story
 * Categories: masthead-layouts
 * Description: Two-column lead story: featured image left (60%), bold headline stack right (40%).
 * Viewport Width: 1280
 * Inserter: true
 *
 * A two-column lead: large featured image on the left, bold headline stack
 * on the right. Designed for the top story in a section.
 *
 * Image: replace the src below with the story's lead photograph. The
 * masthead-featured size (780×520, 3:2) is the correct crop.
 * Alt text: describe the image content for screen readers — this is a
 * content image, not decoration. Leaving alt="" on an editorial photograph
 * is a WCAG 1.1.1 failure.
 *
 * @package masthead
 */
?>
<!-- wp:group {"className":"np-pattern-breaking-story","metadata":{"categories":["masthead-layouts"],"name":"Breaking Story"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"border":{"bottom":{"color":"var:preset|color|rule-light","style":"solid","width":"1px"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group np-pattern-breaking-story">

	<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|12"},"padding":{"top":"0","bottom":"0"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:image {"aspectRatio":"3/2","scale":"cover","sizeSlug":"masthead-featured","linkDestination":"none"} -->
			<figure class="wp-block-image size-masthead-featured"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/masthead-hero.jpg" alt="<?php esc_attr_e( 'Replace with a description of the story\'s lead photograph', 'masthead' ); ?>" style="aspect-ratio:3/2;object-fit:cover" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"40%","style":{"spacing":{"padding":{"top":"var:preset|spacing|4"}}}} -->
		<div class="wp-block-column" style="flex-basis:40%">

			<!-- wp:paragraph {"className":"np-category-label","style":{"color":{"text":"var:preset|color|accent-red"},"typography":{"fontFamily":"var:preset|font-family|inter","fontSize":"0.7rem","fontWeight":"800","letterSpacing":"0.1em","textTransform":"uppercase"}}} -->
			<p class="np-category-label" style="color:var(--wp--preset--color--accent-red)">Breaking News</p>
			<!-- /wp:paragraph -->

			<!-- This pattern supplies the page's single h1 (the lead headline
			     below). Insert it on a template that does not already render an
			     h1 — pairing it with another h1 block (or with a page using
			     page.html, which carries its own title h1) produces two h1s and
			     breaks the WCAG 2.1 1.3.1 single-h1 guarantee. On a layout that
			     already has an h1, demote this heading to level:2 in the block
			     toolbar. -->
			<!-- wp:heading {"level":1,"className":"np-headline--hero","style":{"typography":{"fontFamily":"var:preset|font-family|playfair-display","fontSize":"clamp(1.75rem,4vw,2.75rem)","fontWeight":"700","lineHeight":"1.15"}}} -->
			<h1 class="np-headline--hero">The headline that demands attention and makes readers click.</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|lora","fontStyle":"italic","fontSize":"1.0625rem"},"color":{"text":"var:preset|color|ink-secondary"},"spacing":{"margin":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|5"}}}} -->
			<p style="color:var(--wp--preset--color--ink-secondary)">The deck draws readers in with just enough context to make the headline irresistible — one sentence, no more.</p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"className":"np-byline","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group np-byline">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem"},"color":{"text":"var:preset|color|ink-muted"}}} -->
				<p style="color:var(--wp--preset--color--ink-muted)">By <strong>Jane Reporter</strong> &nbsp;·&nbsp; <?php echo esc_html( date_i18n( get_option( 'date_format' ) ) ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

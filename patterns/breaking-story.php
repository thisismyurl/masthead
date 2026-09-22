<?php
/**
 * Title: Breaking Story
 * Slug: masthead/breaking-story
 * Categories: masthead-layouts
 * Description: Lead story headline stack: category label, headline, deck and byline. Add your own photograph above or beside it.
 * Viewport Width: 1280
 * Inserter: true
 *
 * A bold headline stack for the top story in a section. The pattern ships
 * without a photograph so nothing needs a separate license; add your own image
 * block and describe it in the alt text (an editorial photograph with alt=""
 * is a WCAG 1.1.1 failure).
 *
 * This pattern also supplies the page's single h1 (the lead headline). Insert
 * it only on a template that does not already render one, and demote the
 * heading to level 2 on any other layout — see the same note in story-hero.php.
 *
 * @package masthead
 */
?>
<!-- wp:group {"className":"np-pattern-breaking-story","metadata":{"categories":["masthead-layouts"],"name":"Breaking Story"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"border":{"bottom":{"color":"var:preset|color|rule-light","style":"solid","width":"1px"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group np-pattern-breaking-story">

	<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|12"},"padding":{"top":"0","bottom":"0"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|4"}}}} -->
		<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--4)">

			<!-- wp:paragraph {"className":"np-category-label","style":{"color":{"text":"var:preset|color|accent-red"},"typography":{"fontFamily":"var:preset|font-family|inter","fontSize":"0.7rem","fontWeight":"800","letterSpacing":"0.1em","textTransform":"uppercase"}}} -->
			<p class="np-category-label" style="color:var(--wp--preset--color--accent-red)"><?php esc_html_e( 'Breaking News', 'masthead' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"className":"np-headline--hero","style":{"typography":{"fontFamily":"var:preset|font-family|playfair-display","fontSize":"clamp(1.75rem,4vw,2.75rem)","fontWeight":"700","lineHeight":"1.15"}}} -->
			<h1 class="np-headline--hero"><?php esc_html_e( 'The headline that demands attention and makes readers click.', 'masthead' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|lora","fontStyle":"italic","fontSize":"1.0625rem"},"color":{"text":"var:preset|color|ink-secondary"},"spacing":{"margin":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|5"}}}} -->
			<p style="color:var(--wp--preset--color--ink-secondary)"><?php esc_html_e( 'The deck draws readers in with just enough context to make the headline irresistible — one sentence, no more.', 'masthead' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"className":"np-byline","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group np-byline">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem"},"color":{"text":"var:preset|color|ink-muted"}}} -->
				<p style="color:var(--wp--preset--color--ink-muted)"><?php esc_html_e( 'By', 'masthead' ); ?> <strong><?php esc_html_e( 'Jane Reporter', 'masthead' ); ?></strong> &nbsp;·&nbsp; <?php echo esc_html( date_i18n( get_option( 'date_format' ) ) ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

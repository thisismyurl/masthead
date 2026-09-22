<?php
/**
 * Title: Opinion Row
 * Slug: masthead/opinion-row
 * Categories: masthead-articles
 * Viewport Width: 1280
 * Inserter: true
 *
 * Pattern: Opinion Row
 *
 * Four opinion cards — square author avatar, bold byline, brief headline.
 * Designed for the Opinion section of the front page.
 *
 * @package masthead
 */
?>
<!-- wp:group {"className":"np-pattern-opinion-row","metadata":{"categories":["masthead-articles"],"name":"Opinion Row"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"border":{"top":{"color":"var:preset|color|rule-light","style":"solid","width":"1px"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group np-pattern-opinion-row">

	<!-- wp:paragraph {"className":"np-section-header__title","style":{"typography":{"fontFamily":"var:preset|font-family|playfair-display","fontSize":"1.25rem","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|8"}}}} -->
	<p class="np-section-header__title"><?php esc_html_e( 'Opinion', 'masthead' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|8"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|inter","fontSize":"0.6875rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.05em"},"color":{"text":"var:preset|color|ink-muted"},"spacing":{"margin":{"top":"var:preset|spacing|2","bottom":"0.25rem"}}}} -->
			<p style="color:var(--wp--preset--color--ink-muted)"><?php esc_html_e( 'Opinion by Jane Commentator', 'masthead' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"np-headline--section","style":{"typography":{"fontFamily":"var:preset|font-family|playfair-display","fontWeight":"700"}}} -->
			<h3 class="np-headline--section"><?php esc_html_e( 'The case for slowing down before making the decision that cannot be unmade.', 'masthead' ); ?></h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|inter","fontSize":"0.6875rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.05em"},"color":{"text":"var:preset|color|ink-muted"},"spacing":{"margin":{"top":"var:preset|spacing|2","bottom":"0.25rem"}}}} -->
			<p style="color:var(--wp--preset--color--ink-muted)"><?php esc_html_e( 'Opinion by Mark Analyst', 'masthead' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"np-headline--section","style":{"typography":{"fontFamily":"var:preset|font-family|playfair-display","fontWeight":"700"}}} -->
			<h3 class="np-headline--section"><?php esc_html_e( 'Why the numbers everyone is quoting tell only half the story worth knowing.', 'masthead' ); ?></h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|inter","fontSize":"0.6875rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.05em"},"color":{"text":"var:preset|color|ink-muted"},"spacing":{"margin":{"top":"var:preset|spacing|2","bottom":"0.25rem"}}}} -->
			<p style="color:var(--wp--preset--color--ink-muted)"><?php esc_html_e( 'Opinion by Sarah Correspondent', 'masthead' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"np-headline--section","style":{"typography":{"fontFamily":"var:preset|font-family|playfair-display","fontWeight":"700"}}} -->
			<h3 class="np-headline--section"><?php esc_html_e( 'A generation of readers is not disengaged. They are waiting for someone to earn their trust.', 'masthead' ); ?></h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|inter","fontSize":"0.6875rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.05em"},"color":{"text":"var:preset|color|ink-muted"},"spacing":{"margin":{"top":"var:preset|spacing|2","bottom":"0.25rem"}}}} -->
			<p style="color:var(--wp--preset--color--ink-muted)"><?php esc_html_e( 'Opinion by David Editor', 'masthead' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"np-headline--section","style":{"typography":{"fontFamily":"var:preset|font-family|playfair-display","fontWeight":"700"}}} -->
			<h3 class="np-headline--section"><?php esc_html_e( 'The institutions we stopped trusting a decade ago are not coming back. What replaces them?', 'masthead' ); ?></h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

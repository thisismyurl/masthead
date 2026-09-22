<?php
/**
 * Title: Article Card — Horizontal
 * Slug: masthead/article-card-horizontal
 * Categories: masthead-articles
 * Viewport Width: 1280
 * Inserter: true
 *
 * Pattern: Article Card — Horizontal
 *
 * Thumbnail-left, text-right layout. Used in sidebar trending lists and
 * compact index views.
 *
 * @package masthead
 */
?>
<!-- wp:group {"className":"np-story-card np-story-card--horizontal np-pattern-article-card-horizontal","metadata":{"categories":["masthead-articles"],"name":"Article Card — Horizontal"},"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group np-story-card np-story-card--horizontal np-pattern-article-card-horizontal">


	<!-- wp:group {"layout":{"type":"default"}} -->
	<div class="wp-block-group">

		<!-- wp:paragraph {"className":"np-category-label","style":{"typography":{"fontFamily":"var:preset|font-family|inter","fontSize":"0.6875rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.08em"},"color":{"text":"var:preset|color|accent-red"},"spacing":{"margin":{"bottom":"0.25rem"}}}} -->
		<p class="np-category-label" style="color:var(--wp--preset--color--accent-red)"><?php esc_html_e( 'Category', 'masthead' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":3,"className":"np-headline--compact","style":{"typography":{"fontFamily":"var:preset|font-family|playfair-display","fontWeight":"700","lineHeight":"1.3"}}} -->
		<h3 class="np-headline--compact"><?php esc_html_e( 'A headline that fits in two tight lines without strain.', 'masthead' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|inter","fontSize":"0.75rem"},"color":{"text":"var:preset|color|ink-muted"},"spacing":{"margin":{"top":"0.25rem"}}}} -->
		<p style="color:var(--wp--preset--color--ink-muted)"><?php esc_html_e( 'By Jane Reporter  ·  June 1, 2026', 'masthead' ); ?></p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->

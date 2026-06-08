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

	<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"masthead-card-square","style":{"dimensions":{"width":"100px","height":"100px"}}} -->
	<figure class="wp-block-image size-masthead-card-square" style="width:100px;height:100px"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-1x1.jpg" alt="<?php esc_attr_e( 'Article thumbnail — replace with post image', 'masthead' ); ?>" style="aspect-ratio:1;object-fit:cover" /></figure>
	<!-- /wp:image -->

	<!-- wp:group {"layout":{"type":"default"}} -->
	<div class="wp-block-group">

		<!-- wp:paragraph {"className":"np-category-label","style":{"typography":{"fontFamily":"var:preset|font-family|inter","fontSize":"0.6875rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.08em"},"color":{"text":"var:preset|color|accent-red"},"spacing":{"margin":{"bottom":"0.25rem"}}}} -->
		<p class="np-category-label" style="color:var(--wp--preset--color--accent-red)">Category</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":3,"className":"np-headline--compact","style":{"typography":{"fontFamily":"var:preset|font-family|playfair-display","fontWeight":"700","lineHeight":"1.3"}}} -->
		<h3 class="np-headline--compact">A headline that fits in two tight lines without strain.</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|inter","fontSize":"0.75rem"},"color":{"text":"var:preset|color|ink-muted"},"spacing":{"margin":{"top":"0.25rem"}}}} -->
		<p style="color:var(--wp--preset--color--ink-muted)">By Jane Reporter &nbsp;·&nbsp; June 1, 2026</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->

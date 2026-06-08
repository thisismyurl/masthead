<?php
/**
 * Title: Section Header
 * Slug: masthead/section-header
 * Categories: masthead-sections
 * Viewport Width: 1280
 * Inserter: true
 *
 * Pattern: Section Header
 *
 * The horizontal rule + section title + "More →" link used consistently
 * across every section of the paper.
 *
 * @package masthead
 */
?>
<!-- wp:group {"className":"np-section-header np-pattern-section-header","metadata":{"categories":["masthead-sections"],"name":"Section Header"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|5"}},"border":{"bottom":{"color":"var:preset|color|ink-primary","style":"solid","width":"2px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group np-section-header np-pattern-section-header">

	<!-- wp:paragraph {"className":"np-section-header__title","style":{"typography":{"fontFamily":"var:preset|font-family|playfair-display","fontSize":"1.25rem","fontWeight":"700"}}} -->
	<p class="np-section-header__title">Section Name</p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"className":"np-section-header__rule","style":{"border":{"top":{"color":"var:preset|color|rule-medium","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"0"},"layout":{"type":"default"}}} /-->

	<!-- wp:paragraph {"className":"np-section-header__more","style":{"typography":{"fontFamily":"var:preset|font-family|inter","fontSize":"0.8125rem","fontWeight":"500"},"color":{"text":"var:preset|color|ink-muted"}}} -->
	<p class="np-section-header__more" style="color:var(--wp--preset--color--ink-muted)"><a href="/section">All stories &rarr;</a></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

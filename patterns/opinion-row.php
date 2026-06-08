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
	<p class="np-section-header__title">Opinion</p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|8"}}}} -->
	<div class="wp-block-columns">

		<!-- Column 1 -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"thumbnail","className":"np-opinion-avatar","style":{"border":{"radius":"50%"},"dimensions":{"width":"56px","height":"56px"}}} -->
			<figure class="wp-block-image size-thumbnail np-opinion-avatar" style="border-radius:50%;width:56px;height:56px"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-1x1.jpg" alt="<?php esc_attr_e( 'Author photo — replace with author portrait', 'masthead' ); ?>" style="aspect-ratio:1;object-fit:cover" /></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|inter","fontSize":"0.6875rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.05em"},"color":{"text":"var:preset|color|ink-muted"},"spacing":{"margin":{"top":"var:preset|spacing|2","bottom":"0.25rem"}}}} -->
			<p style="color:var(--wp--preset--color--ink-muted)">Opinion by Jane Commentator</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"np-headline--section","style":{"typography":{"fontFamily":"var:preset|font-family|playfair-display","fontWeight":"700"}}} -->
			<h3 class="np-headline--section">The case for slowing down before making the decision that cannot be unmade.</h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- Column 2 -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"thumbnail","className":"np-opinion-avatar","style":{"border":{"radius":"50%"},"dimensions":{"width":"56px","height":"56px"}}} -->
			<figure class="wp-block-image size-thumbnail np-opinion-avatar" style="border-radius:50%;width:56px;height:56px"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-1x1.jpg" alt="<?php esc_attr_e( 'Author photo — replace with author portrait', 'masthead' ); ?>" style="aspect-ratio:1;object-fit:cover" /></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|inter","fontSize":"0.6875rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.05em"},"color":{"text":"var:preset|color|ink-muted"},"spacing":{"margin":{"top":"var:preset|spacing|2","bottom":"0.25rem"}}}} -->
			<p style="color:var(--wp--preset--color--ink-muted)">Opinion by Mark Analyst</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"np-headline--section","style":{"typography":{"fontFamily":"var:preset|font-family|playfair-display","fontWeight":"700"}}} -->
			<h3 class="np-headline--section">Why the numbers everyone is quoting tell only half the story worth knowing.</h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- Column 3 -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"thumbnail","className":"np-opinion-avatar","style":{"border":{"radius":"50%"},"dimensions":{"width":"56px","height":"56px"}}} -->
			<figure class="wp-block-image size-thumbnail np-opinion-avatar" style="border-radius:50%;width:56px;height:56px"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-1x1.jpg" alt="<?php esc_attr_e( 'Author photo — replace with author portrait', 'masthead' ); ?>" style="aspect-ratio:1;object-fit:cover" /></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|inter","fontSize":"0.6875rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.05em"},"color":{"text":"var:preset|color|ink-muted"},"spacing":{"margin":{"top":"var:preset|spacing|2","bottom":"0.25rem"}}}} -->
			<p style="color:var(--wp--preset--color--ink-muted)">Opinion by Sarah Correspondent</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"np-headline--section","style":{"typography":{"fontFamily":"var:preset|font-family|playfair-display","fontWeight":"700"}}} -->
			<h3 class="np-headline--section">A generation of readers is not disengaged. They are waiting for someone to earn their trust.</h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- Column 4 -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"thumbnail","className":"np-opinion-avatar","style":{"border":{"radius":"50%"},"dimensions":{"width":"56px","height":"56px"}}} -->
			<figure class="wp-block-image size-thumbnail np-opinion-avatar" style="border-radius:50%;width:56px;height:56px"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-1x1.jpg" alt="<?php esc_attr_e( 'Author photo — replace with author portrait', 'masthead' ); ?>" style="aspect-ratio:1;object-fit:cover" /></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|inter","fontSize":"0.6875rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.05em"},"color":{"text":"var:preset|color|ink-muted"},"spacing":{"margin":{"top":"var:preset|spacing|2","bottom":"0.25rem"}}}} -->
			<p style="color:var(--wp--preset--color--ink-muted)">Opinion by David Editor</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"np-headline--section","style":{"typography":{"fontFamily":"var:preset|font-family|playfair-display","fontWeight":"700"}}} -->
			<h3 class="np-headline--section">The institutions we stopped trusting a decade ago are not coming back. What replaces them?</h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

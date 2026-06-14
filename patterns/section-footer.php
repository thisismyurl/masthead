<?php
/**
 * Title: Section Footer
 * Slug: masthead/section-footer
 * Categories: masthead-site
 * Viewport Width: 1280
 * Inserter: true
 *
 * Pattern: Section Footer
 *
 * Full newspaper footer on the dark ink ground: nameplate and about blurb,
 * three link columns (Sections / Follow Us / Subscribe), and a bottom rule
 * carrying the copyright line and legal links.
 *
 * @package masthead
 */
?>
<!-- wp:group {"tagName":"footer","className":"np-footer np-pattern-section-footer","metadata":{"categories":["masthead-site"],"name":"Section Footer"},"style":{"color":{"background":"var:preset|color|ink-primary","text":"var:preset|color|paper-white"},"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<footer class="wp-block-group np-footer np-pattern-section-footer" style="color:var(--wp--preset--color--paper-white);background-color:var(--wp--preset--color--ink-primary);padding-top:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--10)">

	<!-- wp:group {"className":"np-footer__nameplate-bar","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|9"}},"border":{"bottom":{"color":"var:preset|color|ink-secondary","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group np-footer__nameplate-bar" style="border-bottom:1px solid var(--wp--preset--color--ink-secondary);padding-bottom:var(--wp--preset--spacing--9)">
		<!-- wp:heading {"level":2,"className":"np-footer__nameplate","fontSize":"3xl","fontFamily":"playfair-display","style":{"typography":{"fontWeight":"800","letterSpacing":"-0.01em"}}} -->
		<h2 class="wp-block-heading np-footer__nameplate has-playfair-display-font-family has-3-xl-font-size" style="font-weight:800;letter-spacing:-0.01em">The Masthead</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"isStackedOnMobile":true,"className":"np-footer__columns","style":{"spacing":{"padding":{"top":"var:preset|spacing|9"},"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|12"}}}} -->
	<div class="wp-block-columns is-stacked-on-mobile np-footer__columns" style="padding-top:var(--wp--preset--spacing--9)">

		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:heading {"level":3,"className":"np-footer__nav-heading","fontSize":"xs","fontFamily":"inter","textColor":"ink-faint","style":{"typography":{"fontWeight":"800","letterSpacing":"0.12em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
			<h3 class="wp-block-heading np-footer__nav-heading has-ink-faint-color has-text-color has-inter-font-family has-xs-font-size" style="font-weight:800;letter-spacing:0.12em;text-transform:uppercase">About Us</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"np-footer__about","fontSize":"sm","fontFamily":"inter","textColor":"ink-faint","style":{"typography":{"lineHeight":"1.7"}}} -->
			<p class="np-footer__about has-ink-faint-color has-text-color has-inter-font-family has-sm-font-size" style="line-height:1.7">Add a short description of your publication here.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"20%"} -->
		<div class="wp-block-column" style="flex-basis:20%">
			<!-- wp:heading {"level":3,"className":"np-footer__nav-heading","fontSize":"xs","fontFamily":"inter","textColor":"ink-faint","style":{"typography":{"fontWeight":"800","letterSpacing":"0.12em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
			<h3 class="wp-block-heading np-footer__nav-heading has-ink-faint-color has-text-color has-inter-font-family has-xs-font-size" style="font-weight:800;letter-spacing:0.12em;text-transform:uppercase">Sections</h3>
			<!-- /wp:heading -->
			<!-- wp:list {"className":"np-footer__nav-list","fontSize":"sm","fontFamily":"inter","style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
			<ul class="wp-block-list np-footer__nav-list has-inter-font-family has-sm-font-size">
				<!-- wp:list-item --><li><a href="/news">News</a></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><a href="/politics">Politics</a></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><a href="/business">Business</a></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><a href="/culture">Culture</a></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><a href="/tech">Tech</a></li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"20%"} -->
		<div class="wp-block-column" style="flex-basis:20%">
			<!-- wp:heading {"level":3,"className":"np-footer__nav-heading","fontSize":"xs","fontFamily":"inter","textColor":"ink-faint","style":{"typography":{"fontWeight":"800","letterSpacing":"0.12em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
			<h3 class="wp-block-heading np-footer__nav-heading has-ink-faint-color has-text-color has-inter-font-family has-xs-font-size" style="font-weight:800;letter-spacing:0.12em;text-transform:uppercase">Follow Us</h3>
			<!-- /wp:heading -->
			<!-- wp:list {"className":"np-footer__nav-list","fontSize":"sm","fontFamily":"inter","style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
			<ul class="wp-block-list np-footer__nav-list has-inter-font-family has-sm-font-size">
				<!-- wp:list-item --><li><a href="https://example.com/masthead">X</a></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><a href="https://example.com/masthead">Facebook</a></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><a href="https://example.com/masthead">Instagram</a></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><a href="/feed">RSS</a></li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"20%"} -->
		<div class="wp-block-column" style="flex-basis:20%">
			<!-- wp:heading {"level":3,"className":"np-footer__nav-heading","fontSize":"xs","fontFamily":"inter","textColor":"ink-faint","style":{"typography":{"fontWeight":"800","letterSpacing":"0.12em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
			<h3 class="wp-block-heading np-footer__nav-heading has-ink-faint-color has-text-color has-inter-font-family has-xs-font-size" style="font-weight:800;letter-spacing:0.12em;text-transform:uppercase">Subscribe</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"np-footer__about","fontSize":"sm","fontFamily":"inter","textColor":"ink-faint","style":{"typography":{"lineHeight":"1.7"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
			<p class="np-footer__about has-ink-faint-color has-text-color has-inter-font-family has-sm-font-size" style="line-height:1.7">Add your newsletter signup copy here.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"np-footer__subscribe","fontSize":"xs","fontFamily":"inter","style":{"color":{"background":"var:preset|color|accent-red","text":"var:preset|color|paper-white"},"typography":{"fontWeight":"700","letterSpacing":"0.04em","textTransform":"uppercase"}}} -->
				<div class="wp-block-button np-footer__subscribe has-custom-font-size has-inter-font-family has-xs-font-size"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="/newsletter" style="background-color:var(--wp--preset--color--accent-red);color:var(--wp--preset--color--paper-white);font-weight:700;letter-spacing:0.04em;text-transform:uppercase">Subscribe Free</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"className":"np-footer__bottom","style":{"spacing":{"padding":{"top":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|5"},"border":{"top":{"color":"var:preset|color|ink-secondary","style":"solid","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group np-footer__bottom" style="border-top:1px solid var(--wp--preset--color--ink-secondary);padding-top:var(--wp--preset--spacing--8)">
		<!-- Copyright is bound to the masthead/copyright source (inc/bindings.php),
		     matching parts/footer.html: it renders "© {current year} {Site Title}.
		     All rights reserved." with a live year and no static placeholder. -->
		<!-- wp:paragraph {"className":"np-footer__copyright","fontSize":"xs","fontFamily":"inter","textColor":"ink-faint","metadata":{"bindings":{"content":{"source":"masthead/copyright"}}}} -->
		<p class="np-footer__copyright has-ink-faint-color has-text-color has-inter-font-family has-xs-font-size"></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"className":"np-footer__legal","fontSize":"xs","fontFamily":"inter","textColor":"ink-faint"} -->
		<p class="np-footer__legal has-ink-faint-color has-text-color has-inter-font-family has-xs-font-size"><a href="/privacy">Privacy</a> &nbsp;&middot;&nbsp; <a href="/terms">Terms</a> &nbsp;&middot;&nbsp; <a href="/ethics">Ethics Policy</a> &nbsp;&middot;&nbsp; <a href="/contact">Contact</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

</footer>
<!-- /wp:group -->

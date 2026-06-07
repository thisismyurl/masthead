<?php
/**
 * [SKIN] Masthead — menus, post formats, image sizes, block styles,
 * block patterns, excerpt filters, reading time, Interactivity API state.
 *
 * This is the one file that belongs to Masthead alone. The colophon CLI
 * never overwrites it. All theme-specific hooks live here, not in
 * functions.php.
 *
 * @package masthead
 */

namespace Masthead;

defined( 'ABSPATH' ) || exit;
// Opt this theme into GitHub-release self-updates (see inc/github-updater.php).
add_filter( 'masthead/github_updater_repo', static function (): string {{
	return 'thisismyurl/masthead';
}} );

// =========================================================================
// SETUP — menus, post formats, image sizes
// =========================================================================

/**
 * Replace the core default menus with Masthead's full set via the setup filter.
 *
 * Returning a complete replacement array (not merging) drops the generic 'footer'
 * location from core defaults — that location maps to no template region in this
 * theme and would appear as an orphaned slot in Appearance → Menus.
 *
 * @param array $menus Ignored — replaced wholesale.
 * @return array Complete Masthead menu registrations.
 */
add_filter(
	SLUG . '/register_nav_menus',
	static function ( array $_menus ): array {
		return array(
			'primary'         => esc_html__( 'Primary Navigation', 'masthead' ),
			'secondary'       => esc_html__( 'Secondary Navigation', 'masthead' ),
			'section-nav'     => esc_html__( 'Section Navigation', 'masthead' ),
			'footer-column-1' => esc_html__( 'Footer Column 1', 'masthead' ),
			'footer-column-2' => esc_html__( 'Footer Column 2', 'masthead' ),
			'footer-column-3' => esc_html__( 'Footer Column 3', 'masthead' ),
			'footer-legal'    => esc_html__( 'Footer Legal', 'masthead' ),
		);
	}
);

/**
 * Register Masthead post formats and image sizes.
 */
function skin_setup(): void {

	add_theme_support(
		'post-formats',
		array(
			'aside',
			'gallery',
			'link',
			'image',
			'quote',
			'status',
			'video',
			'audio',
			'chat',
		)
	);

	add_image_size( 'masthead-hero', 1440, 810, true );        // 16:9 hero.
	add_image_size( 'masthead-featured', 780, 520, true );    // 3:2 article header.
	add_image_size( 'masthead-card', 600, 400, true );        // 3:2 card.
	add_image_size( 'masthead-card-square', 400, 400, true ); // 1:1 horizontal card.
	add_image_size( 'masthead-thumb', 300, 200, true );       // Small thumb.
	add_image_size( 'masthead-wide', 1280, 720, true );       // 16:9 wide.
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\\skin_setup' );

/**
 * Expose Masthead image sizes in the block editor media library.
 *
 * @param array<string, string> $sizes Existing size labels.
 * @return array<string, string>
 */
function skin_image_size_names( array $sizes ): array {
	return array_merge(
		$sizes,
		array(
			'masthead-hero'        => esc_html__( 'Masthead Hero (1440×810)', 'masthead' ),
			'masthead-featured'    => esc_html__( 'Masthead Featured (780×520)', 'masthead' ),
			'masthead-card'        => esc_html__( 'Masthead Card (600×400)', 'masthead' ),
			'masthead-card-square' => esc_html__( 'Masthead Card Square (400×400)', 'masthead' ),
			'masthead-wide'        => esc_html__( 'Masthead Wide (1280×720)', 'masthead' ),
		)
	);
}
add_filter( 'image_size_names_choose', __NAMESPACE__ . '\\skin_image_size_names' );

// =========================================================================
// INTERACTIVITY API — breaking-news ticker date state
// =========================================================================

/**
 * Expose the current date to the Interactivity API store (breaking news ticker).
 */
function skin_interactivity_state(): void {
	// Namespace must match data-wp-interactive="masthead" in
	// parts/header-breaking-news.html — they are the same context.
	wp_interactivity_state(
		'masthead',
		array(
			'breakingDismissed' => false,
			'siteDate'          => wp_date( get_option( 'date_format' ) ),
		)
	);
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\skin_interactivity_state' );

/**
 * Enqueue the Interactivity API view module for the breaking news ticker.
 *
 * The wp_register_script_module() function is required for @wordpress/interactivity. The
 * script uses the 'wp-interactivity' import map entry which the block editor
 * runtime provides — no manual dependency array needed.
 */
function skin_enqueue_interactivity(): void {
	$script = get_template_directory() . '/assets/js/breaking-news.js';
	if ( ! file_exists( $script ) ) {
		return;
	}
	wp_register_script_module(
		'thisismyurl-newspaper-view',
		get_template_directory_uri() . '/assets/js/breaking-news.js',
		array( array( 'id' => '@wordpress/interactivity' ) ),
		(string) filemtime( $script )
	);
	wp_enqueue_script_module( 'thisismyurl-newspaper-view' );
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\skin_enqueue_interactivity' );

// =========================================================================
// EXCERPT
// =========================================================================

/**
 * Generous excerpt length for article card queries.
 *
 * @param int $_length Default excerpt length (unused — overrides the length unconditionally).
 * @return int
 */
function skin_excerpt_length( int $_length ): int {
	return 30;
}
add_filter( 'excerpt_length', __NAMESPACE__ . '\\skin_excerpt_length' );

/**
 * Replace the default excerpt ellipsis with the proper HTML entity.
 *
 * @param string $_more Default ellipsis string (unused — always returns &hellip;).
 * @return string
 */
function skin_excerpt_more( string $_more ): string {
	return '&hellip;';
}
add_filter( 'excerpt_more', __NAMESPACE__ . '\\skin_excerpt_more' );

// =========================================================================
// READING TIME + BLOCK BINDINGS
// =========================================================================

/**
 * Estimate reading time in minutes for a post.
 *
 * @param int $post_id Post ID; defaults to current post in the loop.
 * @return int Minutes to read (minimum 1).
 */
function skin_reading_time( int $post_id = 0 ): int {
	if ( ! $post_id ) {
		$post_id = (int) get_the_ID();
	}

	$text = wp_strip_all_tags( get_post_field( 'post_content', $post_id ) );

	// Latin scripts: count words via str_word_count.
	// CJK and other character-per-word scripts (Chinese, Japanese, Korean,
	// Arabic, Hebrew, etc.) don't use spaces as word delimiters, so
	// str_word_count() returns near-zero for a 3,000-character post.
	// Detect by comparing the character count to the apparent word count;
	// if the ratio exceeds 3:1 (average English word is ~5 chars), treat
	// it as a character-based language and estimate at 500 chars/minute.
	$char_count = mb_strlen( $text );
	$word_count = str_word_count( $text );

	$minutes = ( $char_count > 0 && $word_count > 0 && ( $char_count / $word_count ) > 3 )
		? (int) ceil( $char_count / 500 )  // CJK / Arabic path.
		: (int) ceil( $word_count / 200 ); // Latin path.

	return max( 1, $minutes );
}

/**
 * Register a Block Bindings source for reading time so templates can bind to it.
 */
function skin_register_bindings(): void {
	if ( ! function_exists( 'register_block_bindings_source' ) ) {
		return;
	}
	register_block_bindings_source(
		'masthead/reading-time',
		array(
			'label'              => __( 'Reading Time', 'masthead' ),
			'get_value_callback' => static function ( array $_source_args ): string {
				$minutes = skin_reading_time();
				/* translators: %d: number of minutes */
				return sprintf( _n( '%d min read', '%d min read', $minutes, 'masthead' ), $minutes );
			},
		)
	);
}
add_action( 'init', __NAMESPACE__ . '\\skin_register_bindings' );

// =========================================================================
// EDITOR UX
// =========================================================================

/*
 * No editor-preference overrides.
 *
 * WordPress stores editor UI preferences (full-screen mode, etc.) per-user
 * deliberately. Overriding them from a theme on every page load would prevent
 * users from saving their preferred working mode. If your editorial team
 * wants fullscreen disabled, they can toggle it themselves — it persists.
 *
 * WP.org Theme Review Team rejects themes that alter user preferences.
 */

// =========================================================================
// BLOCK STYLES
// =========================================================================

/**
 * Register Masthead custom block styles.
 *
 * Style slugs use the np- prefix (newspaper) — kept for CSS continuity.
 * These map to is-style-np-* classes used in templates and patterns.
 */
function skin_register_block_styles(): void {

	$group_styles = array(
		'np-section'          => __( 'Newspaper Section', 'masthead' ),
		'np-section-news'     => __( 'Section: News', 'masthead' ),
		'np-section-politics' => __( 'Section: Politics', 'masthead' ),
		'np-section-business' => __( 'Section: Business', 'masthead' ),
		'np-section-culture'  => __( 'Section: Culture', 'masthead' ),
		'np-section-sports'   => __( 'Section: Sports', 'masthead' ),
		'np-section-tech'     => __( 'Section: Technology', 'masthead' ),
		'np-section-opinion'  => __( 'Section: Opinion', 'masthead' ),
		'np-section-world'    => __( 'Section: World', 'masthead' ),
	);
	foreach ( $group_styles as $name => $label ) {
		register_block_style(
			'core/group',
			array(
				'name'  => $name,
				'label' => $label,
			)
		);
	}

	$headline_styles = array(
		'np-headline-hero'      => __( 'Hero Headline', 'masthead' ),
		'np-headline-secondary' => __( 'Secondary Headline', 'masthead' ),
		'np-headline-section'   => __( 'Section Headline', 'masthead' ),
		'np-headline-compact'   => __( 'Compact Headline', 'masthead' ),
	);
	foreach ( $headline_styles as $name => $label ) {
		register_block_style(
			'core/post-title',
			array(
				'name'  => $name,
				'label' => $label,
			)
		);
	}

	register_block_style(
		'core/pullquote',
		array(
			'name'  => 'np-pullquote-wide',
			'label' => __( 'Wide Centred', 'masthead' ),
		)
	);
	register_block_style(
		'core/separator',
		array(
			'name'  => 'np-rule-heavy',
			'label' => __( 'Heavy Rule', 'masthead' ),
		)
	);
	register_block_style(
		'core/image',
		array(
			'name'  => 'np-image-credit',
			'label' => __( 'With Photo Credit', 'masthead' ),
		)
	);
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'np-dropcap',
			'label' => __( 'Drop Cap', 'masthead' ),
		)
	);
	register_block_style(
		'core/buttons',
		array(
			'name'  => 'np-subscribe-cta',
			'label' => __( 'Subscribe CTA', 'masthead' ),
		)
	);

	$query_styles = array(
		'np-query-horizontal' => __( 'Horizontal Cards', 'masthead' ),
		'np-query-numbered'   => __( 'Numbered List', 'masthead' ),
	);
	foreach ( $query_styles as $name => $label ) {
		register_block_style(
			'core/query',
			array(
				'name'  => $name,
				'label' => $label,
			)
		);
	}
}
add_action( 'init', __NAMESPACE__ . '\\skin_register_block_styles' );

// =========================================================================
// BLOCK PATTERN CATEGORIES
// =========================================================================

/**
 * Register Masthead pattern categories.
 * Individual patterns live in /patterns/ and are auto-registered by WordPress 6.0+.
 */
function skin_register_pattern_categories(): void {

	$categories = array(
		'masthead-layouts'  => array(
			'label'       => __( 'Masthead: Layouts', 'masthead' ),
			'description' => __( 'Full page and section layout patterns.', 'masthead' ),
		),
		'masthead-articles' => array(
			'label'       => __( 'Masthead: Article Cards', 'masthead' ),
			'description' => __( 'Story card and article list patterns.', 'masthead' ),
		),
		'masthead-sections' => array(
			'label'       => __( 'Masthead: Sections', 'masthead' ),
			'description' => __( 'Editorial section header and divider patterns.', 'masthead' ),
		),
		'masthead-sidebar'  => array(
			'label'       => __( 'Masthead: Sidebar', 'masthead' ),
			'description' => __( 'Sidebar widget and promotional patterns.', 'masthead' ),
		),
		'masthead-cta'      => array(
			'label'       => __( 'Masthead: Calls to Action', 'masthead' ),
			'description' => __( 'Newsletter, subscribe, and promotional CTAs.', 'masthead' ),
		),
	);

	foreach ( $categories as $slug => $args ) {
		register_block_pattern_category( $slug, $args );
	}
}
add_action( 'init', __NAMESPACE__ . '\\skin_register_pattern_categories' );

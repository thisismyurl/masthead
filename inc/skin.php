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

defined( 'ABSPATH' ) || exit;

// Opt this theme into GitHub-release self-updates (see inc/github-updater.php).
// Gated on the updater file existing: the WordPress.org distribution strips
// inc/github-updater.php via .distignore, so this opt-in is inert in the
// shipped theme and only activates in the GitHub-hosted build.
if ( file_exists( __DIR__ . '/github-updater.php' ) ) {
	add_filter(
		'masthead/github_updater_repo',
		static function (): string {
			return 'thisismyurl/masthead';
		}
	);
}

// =========================================================================
// SETUP — menus, post formats, image sizes
// =========================================================================

/**
 * Register the one menu location this theme actually renders.
 *
 * Returning a complete replacement array (not merging) drops the generic 'footer'
 * location from core defaults — that location maps to no template region in this
 * theme and would appear as an orphaned slot in Appearance → Menus.
 *
 * This list used to carry six more locations — secondary, section-nav, three
 * footer columns and footer-legal — registered for navigation blocks that no
 * longer exist. The header now renders one navigation, and the footer columns
 * render the site's real categories and pages instead (see WP.org ticket
 * #280625). Registering locations nothing consumes produces exactly the orphaned
 * slots this docblock says the filter exists to prevent.
 *
 * @param array $menus Ignored — replaced wholesale.
 * @return array Complete Masthead menu registrations.
 */
add_filter(
	MASTHEAD_SLUG . '/register_nav_menus',
	static function ( array $_menus ): array {
		return array(
			'primary' => esc_html__( 'Primary Navigation', 'masthead' ),
		);
	}
);

/**
 * Register Masthead post formats and image sizes.
 */
function masthead_skin_setup(): void {

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
add_action( 'after_setup_theme', 'masthead_skin_setup' );

/**
 * Expose Masthead image sizes in the block editor media library.
 *
 * @param array<string, string> $sizes Existing size labels.
 * @return array<string, string>
 */
function masthead_skin_image_size_names( array $sizes ): array {
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
add_filter( 'image_size_names_choose', 'masthead_skin_image_size_names' );

// =========================================================================
// INTERACTIVITY API — breaking-news ticker date state
// =========================================================================

/**
 * Expose the breaking-news dismiss state to the Interactivity API store.
 *
 * A 'siteDate' value used to live here too, for the utility bar's publication
 * date. Nothing reads it any more: the date is server-rendered through the
 * masthead/publication-date block binding, because the directive that consumed
 * this value never resolved (it read `context.siteDate`, but this is state, and
 * the utility bar was not an interactivity island). It is removed rather than
 * left in place so nobody re-wires a directive to it and reproduces the empty
 * paragraph — see WP.org ticket #280625.
 */
function masthead_skin_interactivity_state(): void {
	// Namespace must match data-wp-interactive="masthead" in
	// parts/header-breaking-news.html — they are the same context.
	wp_interactivity_state(
		'masthead',
		array(
			'breakingDismissed' => false,
		)
	);
}
add_action( 'wp_enqueue_scripts', 'masthead_skin_interactivity_state' );

/**
 * Enqueue the Interactivity API view module for the breaking news ticker.
 *
 * The wp_register_script_module() function is required for @wordpress/interactivity. The
 * script uses the 'wp-interactivity' import map entry which the block editor
 * runtime provides — no manual dependency array needed.
 */
function masthead_skin_enqueue_interactivity(): void {
	$script = get_template_directory() . '/assets/js/breaking-news.js';
	if ( ! file_exists( $script ) ) {
		return;
	}
	wp_register_script_module(
		MASTHEAD_SLUG . '-breaking-news-view',
		get_template_directory_uri() . '/assets/js/breaking-news.js',
		array( array( 'id' => '@wordpress/interactivity' ) ),
		(string) filemtime( $script )
	);
	wp_enqueue_script_module( MASTHEAD_SLUG . '-breaking-news-view' );
}
add_action( 'wp_enqueue_scripts', 'masthead_skin_enqueue_interactivity' );

// =========================================================================
// EXCERPT
// =========================================================================

/**
 * Generous excerpt length for article card queries.
 *
 * @param int $_length Default excerpt length (unused — overrides the length unconditionally).
 * @return int
 */
function masthead_skin_excerpt_length( int $_length ): int {
	return 30;
}
add_filter( 'excerpt_length', 'masthead_skin_excerpt_length' );

/**
 * Replace the default excerpt ellipsis with the proper HTML entity.
 *
 * @param string $_more Default ellipsis string (unused — always returns &hellip;).
 * @return string
 */
function masthead_skin_excerpt_more( string $_more ): string {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'masthead_skin_excerpt_more' );

// =========================================================================
// READING TIME + BLOCK BINDINGS
// =========================================================================

/**
 * Estimate reading time in minutes for a post.
 *
 * @param int $post_id Post ID; defaults to current post in the loop.
 * @return int Minutes to read (minimum 1).
 */
function masthead_skin_reading_time( int $post_id = 0 ): int {
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
function masthead_skin_register_bindings(): void {
	if ( ! function_exists( 'register_block_bindings_source' ) ) {
		return;
	}
	register_block_bindings_source(
		'masthead/reading-time',
		array(
			'label'              => esc_html__( 'Reading Time', 'masthead' ),
			'get_value_callback' => static function ( array $_source_args ): string {
				$minutes = masthead_skin_reading_time();
				// Escaped here, not at output: this is a block-bindings
				// get_value_callback, so the return value goes straight into the
				// rendered block with nothing else escaping it on the way.
				//
				// The translators comment must sit immediately above the _n() call
				// with nothing between them, or make-pot will not associate it.
				return esc_html(
					sprintf(
						/* translators: %d: number of minutes */
						_n( '%d min read', '%d min read', $minutes, 'masthead' ),
						$minutes
					)
				);
			},
		)
	);
}
add_action( 'init', 'masthead_skin_register_bindings' );

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
 * Register the theme's one block style: the drop cap.
 *
 * Twenty styles were registered here once and all twenty were dead:
 * register_block_style() emits an `is-style-` prefixed class, and `is-style-np-`
 * appeared nowhere in the stylesheet, which is written against the `np-*` classes
 * the templates apply directly. Nine were worse than inert — the class they
 * produced could not be matched by masthead_skin_gated_sections(), so an editor
 * applying the theme's own "Section: Politics" style silently disabled both the
 * empty-section gate and the category scoping for that section.
 *
 * The drop cap was dead too, by a different route: its rule targeted an ancestor
 * class that appeared in no template. It is the one kept, rather than the one that
 * worked, because it is a real editorial feature and a per-paragraph editor control
 * is the right seam for it. Its CSS now matches the class the style emits. Core offers its own drop
 * cap, which would normally make a custom style redundant — but core's rule ships
 * UNLAYERED, and this theme's CSS lives in cascade layers, so a theme rule could
 * never override it. Rather than hoist one rule out of the layer system, the
 * theme keeps its own style and disables core's duplicate in theme.json
 * (settings.typography.dropCap = false), leaving exactly one control.
 */
function masthead_skin_register_block_styles(): void {
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'np-dropcap',
			'label' => esc_html__( 'Drop Cap', 'masthead' ),
		)
	);
}
add_action( 'init', 'masthead_skin_register_block_styles' );

// =========================================================================
// BLOCK PATTERN CATEGORIES
// =========================================================================

/**
 * Register Masthead pattern categories.
 * Individual patterns live in /patterns/ and are auto-registered by WordPress 6.0+.
 */
function masthead_skin_register_pattern_categories(): void {

	$categories = array(
		'masthead-layouts'  => array(
			'label'       => esc_html__( 'Masthead: Layouts', 'masthead' ),
			'description' => esc_html__( 'Full page and section layout patterns.', 'masthead' ),
		),
		'masthead-articles' => array(
			'label'       => esc_html__( 'Masthead: Article Cards', 'masthead' ),
			'description' => esc_html__( 'Story card and article list patterns.', 'masthead' ),
		),
		'masthead-sections' => array(
			'label'       => esc_html__( 'Masthead: Sections', 'masthead' ),
			'description' => esc_html__( 'Editorial section header and divider patterns.', 'masthead' ),
		),
		'masthead-sidebar'  => array(
			'label'       => esc_html__( 'Masthead: Sidebar', 'masthead' ),
			'description' => esc_html__( 'Sidebar widget and promotional patterns.', 'masthead' ),
		),
		'masthead-cta'      => array(
			'label'       => esc_html__( 'Masthead: Calls to Action', 'masthead' ),
			'description' => esc_html__( 'Newsletter, subscribe, and promotional CTAs.', 'masthead' ),
		),
		'masthead-site'     => array(
			'label'       => esc_html__( 'Masthead: Site Chrome', 'masthead' ),
			'description' => esc_html__( 'Site-level header, footer, and navigation patterns.', 'masthead' ),
		),
	);

	foreach ( $categories as $slug => $args ) {
		register_block_pattern_category( $slug, $args );
	}
}
add_action( 'init', 'masthead_skin_register_pattern_categories' );

/**
 * Whether there is any breaking news to show.
 *
 * @since 1.6201.0911
 *
 * @return bool True when at least one published post is in the breaking-news category.
 */
function masthead_skin_has_breaking_news(): bool {
	$found = wp_cache_get( 'masthead_has_breaking_news' );

	if ( false === $found ) {
		$query = new WP_Query(
			array(
				'post_type'              => 'post',
				'posts_per_page'         => 1,
				'category_name'          => 'breaking-news',
				'fields'                 => 'ids',
				'no_found_rows'          => true,
				'ignore_sticky_posts'    => true,
				'update_post_meta_cache' => false,
				'update_post_term_cache' => false,
			)
		);

		$found = $query->have_posts() ? '1' : '0';
		wp_cache_set( 'masthead_has_breaking_news', $found );
	}

	return '1' === $found;
}

/**
 * Suppress the breaking-news bar when there is no breaking news.
 *
 * WHY: the bar is a red band carrying a "Breaking" label, a blinking dot, an
 * animated ticker, and a dismiss button. On a fresh install the breaking-news
 * category does not exist, so the ticker's query returns nothing and the band
 * renders announcing breaking news and showing none. WP.org ticket #280625
 * flagged that state as a layout that "does not flow gracefully" — an empty
 * animated bar is worse than no bar.
 *
 * Gating at render rather than hiding with CSS keeps the markup honest: no dead
 * DOM, no announced-but-empty aria-live region for a screen-reader user to land in.
 *
 * @since 1.6201.0911
 *
 * @param string $block_content The rendered block markup.
 * @param array  $block         The parsed block.
 * @return string The markup, or an empty string when there is nothing to announce.
 */
function masthead_skin_hide_empty_breaking_news( string $block_content, array $block ): string {
	if ( 'core/template-part' !== ( $block['blockName'] ?? '' ) ) {
		return $block_content;
	}

	if ( 'header-breaking-news' !== ( $block['attrs']['slug'] ?? '' ) ) {
		return $block_content;
	}

	// The ticker is finished rendering: clear the section flag so it cannot leak
	// into any query further down the page. Paired with the set in
	// masthead_skin_mark_section_start().
	masthead_skin_rendering_category( null );

	return masthead_skin_has_breaking_news() ? $block_content : '';
}
add_filter( 'render_block', 'masthead_skin_hide_empty_breaking_news', 10, 2 );

/**
 * Category slug for each gated front-page section, keyed by its modifier class.
 *
 * @since 1.6201.0911
 *
 * @return array<string,string> Modifier class => category slug.
 */
function masthead_skin_gated_sections(): array {
	return array(
		'np-section--politics' => 'politics',
		'np-section--business' => 'business',
		'np-section--tech'     => 'technology',
		'np-section--opinion'  => 'opinion',
	);
}

/**
 * Hide a front-page category section when that category has no posts.
 *
 * WHY: the section heading ("Politics", "Business"…) is a SIBLING of its query,
 * not its parent, so a wp:query-no-results inside the query cannot hide the
 * heading — an empty category rendered a heading and a rule above a blank gap.
 * On a fresh install none of these categories exist, so the front page showed
 * four headed-but-empty zones stacked down the column. WP.org ticket #280625
 * finding 2 ("the structure and layout does not follow typical layout and
 * design") is the reviewer describing that page.
 *
 * The first attempt at this put a "Nothing in this section yet." paragraph in
 * the block template instead. That was wrong twice over: block template HTML
 * cannot carry a translatable string (this theme's own changelog, 1.6164.1530,
 * records removing exactly that class of hardcoded English from archive.html as
 * an i18n fix), and a placeholder is worse than an absence — a section with
 * nothing in it should not be on the page at all. Gating in PHP keeps the
 * strings translatable because there are no strings.
 *
 * The section reappears by itself the moment the category has a post.
 *
 * @since 1.6201.0911
 *
 * @param string $block_content The rendered block markup.
 * @param array  $block         The parsed block.
 * @return string The markup, or an empty string when the section has no posts.
 */
function masthead_skin_hide_empty_section( string $block_content, array $block ): string {
	if ( 'core/group' !== ( $block['blockName'] ?? '' ) ) {
		return $block_content;
	}

	$class_name = $block['attrs']['className'] ?? '';
	if ( '' === $class_name ) {
		return $block_content;
	}

	foreach ( masthead_skin_gated_sections() as $modifier => $category ) {
		// Match the modifier as a whole class, so np-section--tech cannot be
		// matched by a longer class that merely starts with it.
		if ( ! in_array( $modifier, preg_split( '/\s+/', $class_name ), true ) ) {
			continue;
		}

		// This section is finished rendering: clear the flag so the next query on
		// the page is not scoped to this section's category. Paired with the set
		// in masthead_skin_mark_section_start().
		masthead_skin_rendering_category( null );

		if ( ! masthead_skin_category_has_posts( $category ) ) {
			return '';
		}

		return masthead_skin_resolve_section_more_link( $block_content, $category );
	}

	return $block_content;
}

/**
 * Point a section's "More Politics →" link at that category's archive.
 *
 * The section headers ship `href="#"` because a template cannot know a term's
 * permalink — it differs per install, as the term ID does. The link therefore
 * went nowhere on every site. That is the same dead-out-of-the-box experience
 * WP.org ticket #280625 was filed about, in a place the first fixes did not
 * reach; and the empty-section gate sharpened it, because a section now only
 * renders once its category genuinely has posts — exactly when a real archive
 * URL exists and the link still pointed at nothing.
 *
 * Only the first href="#" in the section is replaced: that is the one in the
 * section header, and story cards below it carry real post permalinks already.
 *
 * @since 1.6201.0911
 *
 * @param string $block_content The rendered section markup.
 * @param string $category      Category slug for this section.
 * @return string The markup with the section link resolved.
 */
function masthead_skin_resolve_section_more_link( string $block_content, string $category ): string {
	if ( false === strpos( $block_content, 'href="#"' ) ) {
		return $block_content;
	}

	$term = get_category_by_slug( $category );

	if ( ! $term instanceof WP_Term ) {
		return $block_content;
	}

	$link = get_category_link( $term->term_id );

	if ( ! $link ) {
		return $block_content;
	}

	$position = strpos( $block_content, 'href="#"' );

	return substr_replace(
		$block_content,
		'href="' . esc_url( $link ) . '"',
		$position,
		strlen( 'href="#"' )
	);
}
add_filter( 'render_block', 'masthead_skin_hide_empty_section', 10, 2 );

/**
 * Whether a category has at least one published post.
 *
 * Result is cached per request — the front page asks this once per gated
 * section, and every answer is the same across the four.
 *
 * @since 1.6201.0911
 *
 * @param string $category Category slug.
 * @return bool True when the category has at least one published post.
 */
function masthead_skin_category_has_posts( string $category ): bool {
	$cache_key = 'masthead_cat_has_posts_' . $category;
	$found     = wp_cache_get( $cache_key );

	if ( false === $found ) {
		$query = new WP_Query(
			array(
				'post_type'              => 'post',
				'posts_per_page'         => 1,
				'category_name'          => $category,
				'fields'                 => 'ids',
				'no_found_rows'          => true,
				'ignore_sticky_posts'    => true,
				'update_post_meta_cache' => false,
				'update_post_term_cache' => false,
			)
		);

		$found = $query->have_posts() ? '1' : '0';
		wp_cache_set( $cache_key, $found );
	}

	return '1' === $found;
}


// =========================================================================
// CATEGORY-SCOPED QUERIES — the front-page section rails and the ticker
// =========================================================================

/*
 * WHY ANY OF THIS EXISTS.
 *
 * Five query blocks in this theme are supposed to be restricted to one
 * category each: the breaking-news ticker, and the Politics / Business /
 * Technology / Opinion rails on the front page. Every one of them tried to say
 * so declaratively, as "taxQuery":{"category_name":["politics"]}. Core ignores
 * that: taxQuery is keyed by TAXONOMY name and takes term IDs, and
 * "category_name" is not a taxonomy. So all five silently returned the most
 * recent posts of any category, under headings naming a category. The theme
 * asserted a falsehood — and after the empty-section gate landed, it asserted a
 * worse one: it checked that Politics had posts, showed the section on that
 * basis, then filled it with posts that were not Politics.
 *
 * A template cannot carry the fix, because a term ID differs on every install.
 * So the restriction is applied here, in PHP.
 *
 * WHY IT IS RENDER-SCOPED AND NOT ATTRIBUTE-MATCHED.
 *
 * The first attempt at this hooked query_loop_block_query_vars and set the
 * category unconditionally. That filter fires for EVERY non-inherit query loop
 * on the page, so it did not restrict the ticker — it restricted the entire
 * site to one category, and on a fresh install (where the breaking-news
 * category does not exist) its match-nothing branch blanked the front page
 * outright, h1 included.
 *
 * The obvious repair is to match on the block's "namespace" attribute. That was
 * rejected: the key that attribute arrives under has not been stable across
 * core releases, and a check against the wrong key does not fail loudly — it
 * fails OPEN, silently restoring the site-wide behaviour above. A guard that
 * quietly stops matching is the same bug wearing a comment.
 *
 * So instead: a flag is set while a known section is rendering, and the query
 * filter does nothing at all unless that flag is set. The default is untouched
 * queries. If the marking ever stops working, the theme loses a category
 * restriction on five blocks — visible, and merely the old bug. It cannot
 * blank the site.
 */

/**
 * Get, set, or clear the category slug whose section is currently rendering.
 *
 * @since 1.6201.0911
 *
 * @param string|null|false $category Slug to set, null to clear, false to read.
 * @return string|null The category slug currently rendering, if any.
 */
function masthead_skin_rendering_category( $category = false ): ?string {
	static $current = null;

	if ( false !== $category ) {
		$current = is_string( $category ) ? $category : null;
	}

	return $current;
}

/**
 * Mark the start of a category-scoped section, before its query runs.
 *
 * pre_render_block fires for a block before its inner blocks render, so the
 * flag is already set by the time the nested query block builds its query vars.
 * The matching clear happens in the render_block filters below, which fire
 * after the block's inner content is complete.
 *
 * @since 1.6201.0911
 *
 * @param string|null $pre_render   Short-circuit value; passed through untouched.
 * @param array       $parsed_block The parsed block.
 * @return string|null The unmodified $pre_render.
 */
function masthead_skin_mark_section_start( $pre_render, array $parsed_block ) {
	$block_name = $parsed_block['blockName'] ?? '';

	if ( 'core/template-part' === $block_name
		&& 'header-breaking-news' === ( $parsed_block['attrs']['slug'] ?? '' ) ) {
		masthead_skin_rendering_category( 'breaking-news' );
		return $pre_render;
	}

	if ( 'core/group' === $block_name ) {
		$classes = preg_split( '/\s+/', (string) ( $parsed_block['attrs']['className'] ?? '' ) );

		foreach ( masthead_skin_gated_sections() as $modifier => $category ) {
			if ( in_array( $modifier, $classes, true ) ) {
				masthead_skin_rendering_category( $category );
				break;
			}
		}
	}

	return $pre_render;
}
add_filter( 'pre_render_block', 'masthead_skin_mark_section_start', 10, 2 );

/**
 * Restrict a query loop to the section category currently rendering.
 *
 * Does nothing — returns the query untouched — unless a section is marked. See
 * the block comment above for why that default matters.
 *
 * @since 1.6201.0911
 *
 * @param array $query  Arguments for WP_Query.
 * @param mixed $_block The block instance (unused; scoping is by render flag).
 * @return array The query arguments.
 */
function masthead_skin_scope_section_query( array $query, $_block ): array {
	$category = masthead_skin_rendering_category();

	if ( null === $category ) {
		return $query;
	}

	// Consume the flag on read. Each gated section holds exactly one query block,
	// and so does the ticker, so this is lossless — and it means correctness no
	// longer depends on the matching clear in the render_block filters running at
	// all. It has to, because render_block does NOT run when a plugin
	// short-circuits a block through pre_render_block: apply_filters still calls
	// every callback (so this flag is already set), but a non-null return from any
	// of them makes core skip the render and its filter entirely. Without
	// consume-on-read, one plugin short-circuiting a gated group would scope every
	// remaining query loop on the page to that category.
	masthead_skin_rendering_category( null );

	$term = get_category_by_slug( $category );

	if ( ! $term instanceof WP_Term ) {
		// The category does not exist on this install. Match nothing rather than
		// silently widening to every post — a rail headed "Politics" must not fill
		// with posts that are not Politics. Both the ticker and the section rails
		// are hidden outright in this case anyway; this is the belt to that braces.
		$query['post__in'] = array( 0 );

		return $query;
	}

	$query['cat'] = $term->term_id;

	return $query;
}
add_filter( 'query_loop_block_query_vars', 'masthead_skin_scope_section_query', 10, 2 );

<?php
/**
 * [CORE] Bootstrap — the single re-prefixing point for the whole theme line.
 *
 * This is the ONE place a theme's identity lives. Change the `masthead_` function
 * prefix and the MASTHEAD_* constants and the entire theme re-prefixes, because
 * every other file derives its asset handles, hooks, and i18n keys from them. With
 * Colophon you rarely edit this by hand — the `colophon` CLI rewrites the prefix,
 * slug, and version here from the theme's colophon.json every time it scaffolds or
 * syncs. The constants are still the source of truth at runtime; the CLI just keeps
 * them honest.
 *
 * Why a `masthead_` function prefix and not a namespace (reversed 2026-07-20):
 * this line originally read `namespace Masthead;`, on the reasoning that callbacks
 * register as `__NAMESPACE__ . '\\fn'` and so renaming one line re-points every
 * hook at once. The WordPress.org Theme Review Team rejected that on ticket
 * #280625, which closed this theme as not-approved: a namespace is accepted only at
 * the CLASS level, because a WordPress site loads a large number of vendor
 * functions into the global scope and a bare `function setup()` inside a namespace
 * still reads as unprefixed. Every function, constant, and class defined in the
 * global scope must carry a unique per-theme prefix, no abbreviations. The CLI now
 * rewrites `masthead_` → `<slug>_`, `MASTHEAD_` → `<SLUG>_`, and `Masthead_` →
 * `<Slug>_`, so the one-place-to-re-prefix property survives the change.
 *
 * NOTE — the one place "tidy" is a bug: the text DOMAIN in __()/_e()/esc_html__()
 * stays a string LITERAL ('masthead'), never the MASTHEAD_SLUG constant. `wp i18n
 * make-pot` reads source statically and only recognises a literal as the domain
 * argument; hand it a constant and it extracts nothing and ships an
 * untranslatable theme. The CLI rewrites the literal too, so it survives a
 * re-skin. See ARCHITECTURE.md §4.
 *
 * @package masthead
 */

defined( 'ABSPATH' ) || exit;

/**
 * Theme slug — the text-domain-equivalent identity used for asset handles,
 * pattern and block-style prefixes, and the block-bindings source namespace.
 * The CLI rewrites this (and the i18n literals) when it generates a theme.
 */
define( 'MASTHEAD_SLUG', 'masthead' );

/**
 * Theme version — cache-bust for enqueued assets and the WordPress.org version.
 * The CLI injects the theme's own version from colophon.json on every sync.
 */
define( 'MASTHEAD_VERSION', '1.6201.0911' );

/**
 * Absolute filesystem path to the theme root (no trailing slash).
 */
define( 'MASTHEAD_DIR', get_template_directory() );

/**
 * Public URL to the theme root (no trailing slash).
 */
define( 'MASTHEAD_URI', get_template_directory_uri() );

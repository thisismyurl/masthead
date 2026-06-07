/**
 * Breaking News Ticker — Interactivity API view module.
 *
 * Namespace: masthead  (must match data-wp-interactive attribute
 * in parts/header-breaking-news.html and the wp_interactivity_state() call in
 * inc/skin.php)
 *
 * Handles:
 *   - Dismiss button: hides the breaking bar and stores the preference in
 *     sessionStorage so the bar stays hidden for the current browser session
 *     (dismissed state resets on a new session — intentional for a news bar).
 *   - Initial state restore: re-applies dismissed state from sessionStorage
 *     on load so the bar doesn't flash visible then hide.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-interactivity/
 */

import { store, getContext } from '@wordpress/interactivity';

const STORAGE_KEY = 'masthead-breaking-dismissed';

store( 'masthead', {
	actions: {
		/**
		 * Dismiss the breaking news bar for the current session.
		 *
		 * Sets context.dismissed = true (drives data-wp-class--hidden) and
		 * persists to sessionStorage so a page reload doesn't re-show the bar.
		 */
		dismiss() {
			const context = getContext();
			context.dismissed = true;
			try {
				sessionStorage.setItem( STORAGE_KEY, '1' );
			} catch ( _e ) {
				// sessionStorage is not available (private browsing, storage quota).
				// Silent failure — the bar is still hidden via context for this page load.
			}
		},
	},

	callbacks: {
		/**
		 * On mount, check sessionStorage and dismiss immediately if previously
		 * dismissed. Runs before first paint so there is no visible flash.
		 */
		initDismissState() {
			const context = getContext();
			try {
				if ( sessionStorage.getItem( STORAGE_KEY ) === '1' ) {
					context.dismissed = true;
				}
			} catch ( _e ) {
				// sessionStorage not available — no-op.
			}
		},
	},
} );

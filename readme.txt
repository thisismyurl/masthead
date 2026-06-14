=== Masthead ===
Contributors: thisismyurl
Requires at least: 6.7
Tested up to: 6.8
Requires PHP: 7.4
Stable tag: 1.6165.0905
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Tags: news, blog, two-columns, grid-layout, full-site-editing, block-patterns, accessibility-ready, translation-ready, wide-blocks, custom-colors, custom-logo, custom-menu, editor-style, featured-images, sticky-post

For independent regional newsrooms: an accessible FSE newspaper theme with five named editions (Broadsheet, Tabloid, Midnight, Weekend, Digital First) as one-click style variations, bold editorial typography, and zero plugin dependencies.

== Description ==

Masthead is a free WordPress FSE theme built for independent regional newsrooms, digital news magazines, and editorial publications — the publisher who wants a broadsheet's authority without a developer's retainer. Zero plugin dependencies. Built to WCAG 2.2 AA guidance. Core Web Vitals optimised.

This theme is for editorial teams that publish on a cadence and want a structured, section-driven front page — a town daily, a regional weekly, a digital news magazine, a long-form essay desk. It is not a one-page brochure theme, a portfolio grid, or a shop front; if your site is built around a single landing page or a product catalogue, a general-purpose theme will serve you better. Masthead earns its keep when you have sections, bylines, and a steady stream of stories.

Five named editions ship as one-click style variations, so the same content can read as a Sunday broadsheet, a punchy tabloid, or a dark-mode digital magazine without touching a line of CSS — see Editions below.

Key features:

* Full Site Editing — every element customisable in the Site Editor
* Bold editorial typography — Playfair Display headlines, Lora body text, Inter UI (fonts are optional; beautiful system-font fallbacks included)
* Editorial block patterns — story hero, breaking story, section header, section navigation, article and opinion rows, newsletter CTA, and a full section footer (eight patterns; see Block Patterns below)
* Section colour coding — eight section accent colours (News, Politics, Business, Culture, Sports, Tech, Opinion, World) controlled by CSS custom properties
* Reading progress indicator — pure CSS, no JavaScript (the only front-end feature with zero JS; see Accessibility & JavaScript below)
* Drop cap support — apply via the np-dropcap block class
* Breaking news ticker — animated with CSS, with a small Interactivity-API dismiss button
* Newsletter signup pattern — integrates with any form plugin
* Advertisement placeholder blocks — IAB-standard sizes
* Accessibility built to WCAG 2.2 AA guidance — skip link, visible focus outlines, ARIA landmarks, logical heading order, reduced-motion support (see Accessibility & JavaScript below)
* RTL-ready — layout written with CSS logical properties (see Accessibility & JavaScript below for the documented caveat)
* Dark mode — respects prefers-color-scheme automatically
* High-contrast mode support
* Print-optimised — navigation, ads, and sidebars hidden automatically
* Core Web Vitals optimised — no render-blocking JavaScript, minimal CSS, lazy-loaded images
* Sticky-post hero — pin your top story to the homepage hero position
* Compatible with Yoast SEO, Rank Math, WPForms, Gravity Forms, WooCommerce, Newspack, and The Events Calendar

== Installation ==

1. In your WordPress dashboard go to Appearance → Themes → Add New → Upload Theme.
2. Upload the theme zip file and click Install Now.
3. Click Activate.
4. Go to Appearance → Site Editor to customise your site.

== Bundled Fonts ==

Playfair Display, Lora, and Inter are bundled as WOFF2 files in assets/fonts/ and loaded via theme.json @font-face declarations. No downloads or external services are required — the fonts never phone home to Google or any other server.

== Quick Start ==

Homepage:
1. Create a new page and assign it as your "Homepage" in Settings → Reading.
2. The front-page.html template applies automatically.
3. Pin your featured story using the Sticky checkbox in the post publish panel.

Section navigation:
Create a navigation menu called "Section Navigation" and assign it to the Section Navigation menu location.

Breaking news:
Add a "Breaking News" category or tag. Recent posts from that taxonomy populate the breaking news ticker (customisable in the Site Editor → Template Parts → Breaking News Bar).

== Block Patterns ==

Masthead ships eight block patterns. Insert them from the Patterns inserter
(+ icon → Patterns tab):

Article Card — Horizontal  — Thumbnail beside headline, deck, and byline
Breaking Story             — Lead photo with breaking-news label and deck
Newsletter CTA             — Email signup block on a tinted panel
Opinion Row                — Row of opinion columns with author photos
Section Footer             — Full dark-ground footer with nameplate and links
Section Header             — Coloured section title with horizontal rule
Section Navigation         — Inline row of section links
Story Hero                 — Full-width story headline, deck, and byline row

== Editions ==

Masthead ships five named editions as one-click style variations (Appearance →
Editor → Styles → Browse styles). Each is a complete typographic and colour
re-skin built on the same accessible structure — switch editions without
editing CSS or rebuilding layouts:

* Broadsheet — the default. Tall Playfair headlines, generous column rhythm,
  the authority of a Sunday paper of record.
* Tabloid — tighter, louder, higher-contrast. Built for breaking news and
  high-tempo regional desks.
* Midnight Edition — a dark-mode reading experience for night desks and
  digital-native audiences.
* Weekend Edition — softer rhythm and warmer accents for long-form features,
  essays, and culture coverage.
* Digital First — a lean, screen-native treatment optimised for mobile reading
  and Core Web Vitals.

== Typography & Vertical Rhythm ==

Masthead pairs three typefaces by role: Playfair Display for headlines (the
broadsheet voice), Lora for body copy (a serif tuned for long-form reading), and
Inter for UI and metadata (bylines, labels, navigation). The pairing is the
theme's signature, not a default.

Headline sizes follow a fluid type scale built on CSS clamp(), so a headline
grows smoothly from phone to desktop without breakpoint jumps — for example the
archive title runs clamp(2rem, 5vw, 3.5rem). Letter-spacing is tuned per heading
level: large display headlines tighten (negative tracking) for editorial
density, while small uppercase labels (section kickers, footer headings) open up
to roughly 0.12em for legibility at size.

Vertical rhythm is driven by the theme.json spacing preset scale rather than ad
hoc margins, so blocks stack on a consistent baseline across every template. Body
copy sits at a 1.65–1.7 line-height for sustained reading.

Edition type-scale deltas: each named edition re-skins this system rather than
replacing it. Broadsheet keeps the tallest headline scale and most generous
rhythm; Tabloid tightens the scale and raises contrast for high-tempo desks;
Digital First trims display sizes for screen-native, mobile-first reading;
Weekend softens rhythm for long-form features; Midnight inverts the colour ground
while holding the same metrics. Switching editions never touches layout or CSS.

== Section Colours ==

Override section accent colours in Appearance → Customize → Additional CSS:

  :root {
    --np-col-politics: #1a3762;
    --np-col-business: #1b5e20;
    --np-col-culture:  #6a1b9a;
    --np-col-sports:   #bf360c;
    --np-col-tech:     #0d47a1;
    --np-col-world:    #3d7a3d;
  }

Apply a section colour to any Group block by adding its CSS class (e.g., np-section--politics).

== Plugin Compatibility ==

Works with (no configuration required):
* Yoast SEO / Rank Math — meta tags injected before </head>
* WPForms / Gravity Forms — form styles inherit theme Inter font
* WooCommerce — shop pages use page.html template
* Newspack — story card patterns are Newspack-compatible
* The Events Calendar — archive.html template applies to event archives
* MailPoet / Mailchimp for WordPress — newsletter patterns are form-plugin-ready

== Accessibility & JavaScript ==

Accessibility is built to WCAG 2.2 AA guidance. This is not a third-party audit certification; it is a description of what ships and how to keep it. The specific measures in the theme are:

* Skip link — a "skip to content" link is the first focusable element; every template's <main> carries id="main-content" as its target.
* Visible focus — focus outlines are never removed; interactive elements show a focus ring on keyboard navigation.
* Landmarks — header, navigation, main, and footer regions use semantic landmarks for screen-reader navigation.
* Heading order — every template has exactly one h1 and a logical heading sequence (WCAG 2.1 1.3.1).
* Contrast — text and UI colours are chosen to clear WCAG 1.4.3 (4.5:1 normal text, 3:1 large text and UI) on the ground each element actually renders against, in every edition including the inverted Midnight and Broadsheet style variations.
* Reduced motion — animations (breaking-news ticker, reading-progress indicator) respect prefers-reduced-motion.

Keeping a site at this bar depends on your own content: write descriptive link text, add alt text to images, and maintain heading order in posts.

JavaScript scope: the theme is JavaScript-free for reading. Two features ship small scripts:

* Breaking-news dismiss button — assets/js/breaking-news.js plus an Interactivity API module power the dismiss control on the breaking-news bar.
* Reading-progress indicator — this is the one feature that uses zero JavaScript; it is pure CSS.

No analytics, tracking, or remote scripts are enqueued.

Translation scope: every string the theme generates from PHP — admin onboarding
copy, block-style and pattern-category labels, image-size names, reading-time
output — is wrapped in gettext functions against the "masthead" text domain and
ships in languages/. The demo copy inside the block templates (the front-page
section labels such as "Top Stories", the footer's "Subscribe Now" call to
action, and similar editorial placeholders) is editor content, not theme code:
it is meant to be replaced in the Site Editor for your own publication and is
not localized, in keeping with standard Full Site Editing practice.

RTL: layout uses CSS logical properties throughout (margin-inline, padding-inline, inset-inline-start). WordPress 6.7+ handles block-level direction conversion automatically, and the theme's own positioned elements — the skip link, the screen-reader-text focus state, and the admin onboarding step counter — use inset-inline-start, so they land at the inline-start edge in both LTR and RTL. No physical directional offsets remain in the front-end or admin CSS. If RTL rendering issues occur, confirm WordPress 6.7+ and current logical-property browser support.

== For Developers ==

The Get-started screen's developer-guide link is filterable. Change where the
"developer guide" link points without editing the theme:

  add_filter(
      'masthead/developer_guide_url',
      function ( $url ) {
          return 'https://example.com/my-theme-guide';
      }
  );

Default: https://thisismyurl.com/colophon
Filter type: filter (string in, string out).
Fires from: get_started_content() in inc/admin.php.
Syntax above is PHP 7.4-compatible.

== Frequently Asked Questions ==

= Is this theme free? =

Yes. Licensed GPLv2 or later.

= Does it require any plugins? =

No. Zero plugin dependencies. Works with popular plugins but requires none.

= Where do I set section colours? =

Each section category gets its accent colour from a CSS custom property. Override in Appearance → Customize → Additional CSS (see Section Colours section above).

== Changelog ==

= 1.6165.0905 =
* Accessibility: two subscribe buttons (sidebar, front-page) hardcoded white label text
  inline, bypassing the accent-red inversion seam, so they fell to ~3:1 in the Midnight and
  Broadsheet editions; both now use Paper White (the inverting partner) like the footer button.
* Accessibility: the newsletter input painted its own white ground under inverting
  text, and the subscribe/newsletter button hover backgrounds (a stable dark red) carried
  inverting text; the input now uses Paper White (the inverting partner) and the hovers pin
  light text. Resolves the last white-on-near-white pairs in the Midnight/Broadsheet editions.
* Accessibility: the search button, table header, and pagination hover painted their own
  Ink Primary ground with hardcoded white text, which inverted to white-on-near-white
  (~1.2:1) in the Midnight and Broadsheet editions; they now use Paper White, the
  inverting partner of Ink Primary (15.9-16.6:1 in those editions).
* Accessibility (WCAG 1.4.3 contrast) — inverted editions: the previous audit
  checked each text pair against the default light ground and missed the surfaces
  whose colour token flips meaning when an edition inverts the ground. A surface-
  by-surface relative-luminance pass (every edition x templates, parts, patterns,
  buttons, placeholders, skip link) found and fixed the dark-on-dark and
  light-on-light pairs in the two dark editions, Midnight and Broadsheet:
  * Section-header titles render in the section accent colour on the page ground.
    The dark editions inverted the ground to near-black but overrode only the
    Sports accent, so Politics, Business, Culture, Technology, and World titles
    sat at 1.6–3.8:1. Each dark edition now ships a lighter variant of all five
    section accents (5.8–9.3:1) that keeps each section's hue identity. World
    moved from a hardcoded hex in skin.css to a Section World palette token so
    editions can re-skin it like the others.
  * Footer chrome: the footer ground was bound to the Base Black palette token,
    which is "the darkest ink" and therefore inverts to a light value in the dark
    editions — compositing the near-white footer text to ~1.0–1.1:1. The footer
    (and the skip link, which had the same dependency) now use an edition-stable
    dark chrome value, so they stay dark-ground / light-text in every edition.
    The footer nameplate no longer binds the inverting Paper White token.
  * Buttons on the accent-red ground: the dark editions lighten Accent Red for
    label legibility, which drops white button text to 3.0–3.5:1. Button label
    text on the accent ground is now an On Accent token, re-paired to the dark
    paper in Midnight and Broadsheet (5.6–6.5:1); Midnight's core button text was
    re-paired to match.
  * The sidebar ad placeholder used Ink Faint, which fails the 3:1 UI threshold on
    the Paper Light panel in every edition (1.6–2.8:1); it now uses Ink Muted
    (4.6–6.8:1).
  After these fixes, every text and UI pair clears 4.5:1 (normal text) / 3:1
  (large text and UI) in all five editions and the default — verified by an
  alpha-compositing relative-luminance audit of 168 edition x surface pairs.
* Version: synced style.css, inc/bootstrap.php VERSION, the readme stable tag, and
  the colophon.json version field (which had drifted to 1.6148).

= 1.6165.1214 =
* Accessibility (WCAG 2.2 AA contrast): an exhaustive relative-luminance audit
  of every text/background pair across templates, parts, patterns, theme.json,
  the five style variations, and skin.css found and fixed every pair below the
  4.5:1 (normal text) / 3:1 (UI) threshold. Fixes: the Sports section accent
  darkened from #e65100 to #bf360c so section titles clear 4.5:1 on light grounds
  (5.60:1); newsletter-input placeholder, the ad-placeholder label, and the Story
  Hero byline date moved from Ink Faint to Ink Muted; the dark footer's nav
  headings, copyright, tagline, and legal line no longer compound a CSS opacity on
  top of an already-translucent colour (the doubled alpha had dropped them to
  2.5–4.3:1). Variation-specific fixes: Broadsheet and Midnight gained a lighter
  Sports accent and a brighter Accent Red that read on their dark grounds;
  Tabloid's Ink Muted and Accent Red darkened to clear the warm paper panels.
  (Superseded by 1.6165.0837 below, which audited the inverted editions surface
  by surface and fixed the dark-on-dark pairs this entry had missed.)
* Documentation accuracy: the Block Patterns section listed ten patterns under
  invented names (Hero Featured, 3-Column Grid, Magazine Layout, Trending Sidebar,
  Article Footer). It now lists the eight patterns that actually ship — Article
  Card — Horizontal, Breaking Story, Newsletter CTA, Opinion Row, Section Footer,
  Section Header, Section Navigation, Story Hero — by their real titles. The Key
  Features pattern line was reconciled to the same eight.
* Changelog accuracy: the 1.6148 entry claimed a category.html template that was
  never shipped. Section archives render through archive.html via the block
  template hierarchy; the entry now says so.
* Version: synced style.css, inc/bootstrap.php VERSION, and the readme stable tag.

= 1.6164.1645 =
* Prefix consistency: the breaking-news Interactivity API script module now
  derives its handle from the theme SLUG constant (SLUG . '-breaking-news-view')
  instead of a hardcoded legacy 'thisismyurl-newspaper-view' literal, so every
  enqueued handle follows the same re-skin contract the CLI relies on.
* RTL: converted the last physical directional offsets to logical properties —
  the skip link, screen-reader-text focus state, and admin onboarding step
  counter now use inset-inline-start. No physical left/right offsets remain in
  front-end or admin CSS; the RTL note in Accessibility & JavaScript no longer
  carries a physical-offset caveat.
* Accessibility (WCAG 2.1 1.3.1): the Story Hero and Breaking Story patterns
  now carry an inserter-facing comment documenting that each supplies the page's
  single h1, with guidance to demote to level:2 when inserted on a layout that
  already renders an h1 (e.g. a page using page.html). This makes the single-h1
  guarantee hold under editor composition the way front-page.html already does.
* Listing: trimmed the most prose-like demo copy in the footer template part and
  the Section Footer pattern to neutral, replace-me placeholders, reducing the
  volume of English editor-content a reviewer encounters. Added a "who this is
  for / who this is not for" positioning paragraph to the Description.
* Version: synced style.css, inc/bootstrap.php VERSION, and the readme stable tag.

= 1.6164.1530 =
* i18n (WCAG/translation-ready): removed the last two hardcoded English visitor
  strings from query-no-results states. templates/index.html ("No posts found.
  Start writing!") and templates/archive.html ("Nothing in this section yet.
  Check back soon.") now show a core Search block for retry instead of
  untranslatable prose. The 1.6163.2233 pass fixed 404 and search; these two
  index/archive states were missed. No untranslatable English now ships in any
  template's error state.
* Accessibility: removed the duplicate skip link. The header template part
  hardcoded a second, non-translatable "Skip to content" link in raw HTML while
  inc/setup.php already emits a translatable, filterable skip link on
  wp_body_open. Every page now renders exactly one skip link (the PHP one). A
  comment in parts/header.html documents where the skip link originates.
* Consistency: the Section Footer pattern's copyright line is now bound to the
  masthead/copyright source (matching parts/footer.html) instead of a static
  "© 2026 The Masthead." It renders a live year and the real Site Title.
* Listing: the readme short description now leads with the "independent regional
  newsrooms" niche and surfaces the five named editions by name. Added a
  Typography & Vertical Rhythm note documenting the type scale, per-level
  letter-spacing, baseline rhythm, and the editions' type-scale deltas.
* Version: synced style.css, inc/bootstrap.php VERSION, and the readme stable tag.

= 1.6163.2233 =
* Requirements honesty: corrected "Tested up to" from a non-existent 7.0 to 6.8
  (current stable) and "Requires PHP" from 8.1 to 7.4 in both style.css and
  readme.txt. The distributed code uses only typed signatures (PHP 7.4+); the
  one 8.0+ call (str_starts_with/str_ends_with) lives in inc/github-updater.php,
  which the WordPress.org build strips via .distignore.
* Template structure: the blank-canvas page template now includes the footer
  template part and a comment documenting the intentional header omission
  (full-bleed landing canvas) so site landmarks stay intact (Check 13).
* Code tidy: gated the GitHub-updater opt-in filter behind a file_exists check
  so a raw-repo zip never activates the self-updater path; collapsed a doubled
  brace block in inc/skin.php.
* Accessibility (WCAG 2.1 1.3.1): the archive and search titles are now explicit
  h1 headings; the index template gains an h1 page heading; the blank-canvas page
  template gains an empty, editor-fillable h1. (Front page and 404 already had one.)
* i18n: removed hardcoded English visitor prose from the 404 and search-no-results
  templates. The 404 page keeps its h1, search form, and home link; the search
  no-results state keeps its search form. No untranslatable English ships in
  templates.
* Documentation: reframed the accessibility statement as WCAG 2.2 AA guidance with
  the specific measures listed (skip link, focus, landmarks, heading order,
  reduced motion) rather than an unbacked certification claim; scoped the
  "zero JavaScript" wording to the reading-progress indicator (the breaking-news
  dismiss control ships a small script and an Interactivity API module); added the
  RTL logical-properties caveat; documented the masthead/developer_guide_url filter
  with a runnable PHP 7.4-compatible example.
* Version: synced inc/bootstrap.php VERSION constant to match style.css and the
  readme stable tag.
* Hardened comment-form attribute injection: a guarded preg_replace (single
  replacement, null-check, no-match fallback) replaces a naive str_replace that
  could double-inject or mangle markup.
* The Get started developer-guide URL is filterable via masthead/developer_guide_url.

= 1.6148.1706 =
* Version timestamp suffix added per project versioning scheme.
* Added explicit Inserter: true header to all patterns.

= 1.6148 =
* CSS architecture migrated: all rules moved from style.css to assets/css/skin.css (Colophon CORE/SKIN pattern).
* Section archives render through archive.html (the block template hierarchy applies it to category and tag archives).
* Added Interactivity-API dismiss handler for breaking news bar.
* Fixed queryId conflicts on homepage query blocks.

= 1.0.0 =
* Initial release.

== Credits ==

= Playfair Display =
* Copyright 2011 Claus Eggers Sørensen (https://github.com/clauseggers/Playfair)
* License: SIL OFL 1.1 (https://openfontlicense.org/open-font-license-official-text/)
* Source: https://github.com/clauseggers/Playfair

= Lora =
* Copyright 2011 Cyreal (https://github.com/cyrealtype/Lora-Cyrillic)
* License: SIL OFL 1.1 (https://openfontlicense.org/open-font-license-official-text/)
* Source: https://github.com/cyrealtype/Lora-Cyrillic

= Inter =
* Copyright 2020 The Inter Project Authors (https://github.com/rsms/inter)
* License: SIL OFL 1.1 (https://openfontlicense.org/open-font-license-official-text/)
* Source: https://github.com/rsms/inter

== License ==

Masthead WordPress Theme is licensed under the GNU General Public License v2 or later.

This program is free software: you can redistribute it and/or modify it under the
terms of the GNU General Public License as published by the Free Software Foundation,
either version 2 of the License, or (at your option) any later version.

== Copyright ==

Masthead WordPress Theme, Copyright 2024–2026 Christopher Ross
Masthead is distributed under the terms of the GNU GPL.

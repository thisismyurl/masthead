=== Masthead ===
Contributors: thisismyurl
Requires at least: 6.7
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.6163.2233
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Tags: news, blog, two-columns, grid-layout, full-site-editing, block-patterns, accessibility-ready, translation-ready, wide-blocks, custom-colors, custom-logo, custom-menu, editor-style, featured-images, sticky-post

A modern, accessible FSE newspaper theme for digital publishers. Bold editorial typography, flexible multi-column layouts, zero plugin dependencies.

== Description ==

Masthead is a free WordPress FSE theme built for digital newspapers, news magazines, and editorial publications. Zero plugin dependencies. WCAG 2.2 AA accessible. Core Web Vitals optimised.

Key features:

* Full Site Editing — every element customisable in the Site Editor
* Bold editorial typography — Playfair Display headlines, Lora body text, Inter UI (fonts are optional; beautiful system-font fallbacks included)
* Multiple homepage layouts — hero, grid, magazine, and section-based editorial layouts via Block Patterns
* Section colour coding — eight section accent colours (News, Politics, Business, Culture, Sports, Tech, Opinion, World) controlled by CSS custom properties
* Reading progress indicator — pure CSS, zero JavaScript
* Drop cap support — apply via the np-dropcap block class
* Breaking news ticker — animated with CSS, Interactivity-API dismiss button
* Newsletter signup pattern — integrates with any form plugin
* Advertisement placeholder blocks — IAB-standard sizes
* WCAG 2.2 AA accessible — skip links, focus rings, ARIA landmarks, logical reading order
* RTL-ready — all layout written with CSS logical properties
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

Insert these from the Patterns inserter (+ icon → Patterns tab):

Masthead: Hero Featured     — Full-width hero with sticky post
Masthead: 3-Column Grid     — Three equal-width article cards
Masthead: 4-Column Grid     — Four compact article cards
Masthead: Magazine Layout   — One large + three secondary stories
Masthead: Section Header    — Coloured section title with rule
Masthead: Breaking News     — Red alert banner
Masthead: Newsletter CTA    — Email signup block
Masthead: Opinion Layout    — Opinion column with pull-quote
Masthead: Trending Sidebar  — Numbered trending list
Masthead: Article Footer    — Tags, author card, related stories

== Section Colours ==

Override section accent colours in Appearance → Customize → Additional CSS:

  :root {
    --np-col-politics: #1a3762;
    --np-col-business: #1b5e20;
    --np-col-culture:  #6a1b9a;
    --np-col-sports:   #e65100;
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

== Frequently Asked Questions ==

= Is this theme free? =

Yes. Licensed GPLv2 or later.

= Does it require any plugins? =

No. Zero plugin dependencies. Works with popular plugins but requires none.

= Where do I set section colours? =

Each section category gets its accent colour from a CSS custom property. Override in Appearance → Customize → Additional CSS (see Section Colours section above).

== Changelog ==

= 1.6163.2233 =
* Accessibility (WCAG 2.1 1.3.1): the archive and search titles are now explicit
  h1 headings; the index template gains an h1 page heading; the blank-canvas page
  template gains an empty, editor-fillable h1. (Front page and 404 already had one.)
* Hardened comment-form attribute injection: a guarded preg_replace (single
  replacement, null-check, no-match fallback) replaces a naive str_replace that
  could double-inject or mangle markup.
* The Get started developer-guide URL is filterable via masthead/developer_guide_url.

= 1.6148.1706 =
* Version timestamp suffix added per project versioning scheme.
* Added explicit Inserter: true header to all patterns.

= 1.6148 =
* CSS architecture migrated: all rules moved from style.css to assets/css/skin.css (Colophon CORE/SKIN pattern).
* Added category.html template for section archive pages.
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

# Masthead

A free, newspaper-heritage full-site-editing WordPress theme for digital publishers, independent newsrooms, and editorial media brands.

[Download from WordPress.org](https://wordpress.org/themes/masthead/) · [Releases](https://github.com/thisismyurl/masthead/releases) · [Built on Colophon](https://github.com/thisismyurl/colophon)

---

## Why I built it this way

In newspaper production, the masthead is the block at the top of the front page that carries the publication's name, date, edition, and price. It's the statement of identity before any story runs. The rest of the page flows from it — section by section, article by article — but the masthead is what tells a reader they're holding a specific publication with a specific point of view.

I spent years designing for Canadian newspapers before I went independent. Most WordPress themes I saw being used by editorial operations were either (a) blog themes with category pages dressed up as sections, or (b) magazine themes from the mid-2010s that predated full-site editing and required a page builder to do anything structural. Neither one worked like a real newsroom needed it to work.

The defining structural decision in Masthead is the utility bar above the navigation — the place where date, edition, weather, and quick links live in print. On the web it carries the publication's tagline and a subscribe link by default. It's a small thing, but it communicates "publication" instead of "blog" in the first three seconds. That distinction matters to editorial audiences who have strong visual literacy about what a publication looks like versus what a blog looks like.

The section navigation is separate from the main navigation. That mirrors print and broadcast practice, where "World," "Business," and "Sport" are structural, not just categories. WordPress categories map to these naturally. The sidebar template supports a right-side rail with a newsletter CTA, recent stories from a second category, and an advertising slot — the three things a revenue-sustaining digital publication typically needs on an article page.

The type system: Playfair Display for headlines (it has the editorial authority of a quality newspaper headline face without looking retro), Lora for body text (a contemporary serif designed for screen reading), Inter for all the structural chrome — navigation, labels, bylines, datelines. Three distinct roles; no typeface doing double duty.

---

## Design decisions

- **Utility bar above navigation** — separates the "publication identity" layer from the "navigation" layer, the way the nameplate block in a broadsheet separates from the section tabs below it.
- **Section navigation as a standalone template part** — maps to WordPress categories or custom taxonomy terms. Lets editors build section pages that feel like sections, not just filtered archives.
- **Sidebar template with three-zone rail** — newsletter, category feed, advertising slot. Editorial operations usually need all three; the template makes them plug-and-play.
- **Breaking news ticker pattern** — thin bar below the utility bar, JavaScript-free, CSS-animated. Holds two to four in-progress stories at any time.
- **Playfair Display / Lora / Inter type system** — each typeface has one job. Playfair makes the headline feel like news. Lora makes the body readable under pressure. Inter handles the structural chrome without asserting personality.

---

## Getting started

1. Install Masthead from Appearance → Themes, or upload the zip from [Releases](https://github.com/thisismyurl/masthead/releases).
2. Go to Appearance → Editor → Navigation. Set up your primary nav and section nav separately — categories work well for sections.
3. Use the Article + Sidebar template for your main story pages and the Article Wide template for features.

---

## Technical notes

- WordPress 6.4 or newer, PHP 8.1 or newer
- Full-site editing (FSE/Gutenberg) — no Classic Editor support
- WCAG 2.2 AA compliant
- One JavaScript file: `breaking-news.js` (CSS animation controller, < 2 KB, loads only when the breaking news ticker pattern is present)
- OFL-licensed fonts: Playfair Display, Lora, Inter
- Self-hosted fonts — no Google Fonts requests

## About Christopher Ross

This theme is built and maintained by [Christopher Ross](https://thisismyurl.com/), the WordPress development and technical SEO practice of Christopher Ross. I help teams build WordPress sites that stay secure, fast, and maintainable, and I build a small, free theme line for people who want a real accessibility and performance floor without starting from scratch.

### My background

- On the web since 1996, and in WordPress since 2007
- WordPress.org plugin developer with 19 plugins published since 2009
- Technical SEO practitioner focused on performance, security, and search visibility
- Lead instructor and curriculum architect at the M.L. Campbell Training Center, the Sherwin-Williams® international training facility for its industrial wood division

### Ways to connect

- **Website:** [thisismyurl.com](https://thisismyurl.com/)
- **WordPress.org:** [profiles.wordpress.org/thisismyurl](https://profiles.wordpress.org/thisismyurl/)
- **GitHub:** [github.com/thisismyurl](https://github.com/thisismyurl)
- **LinkedIn:** [linkedin.com/in/thisismyurl](https://linkedin.com/in/thisismyurl)


## License

GPLv2 or later. See [LICENSE](LICENSE).

The fonts bundled in `assets/fonts/` are licensed under the SIL Open Font License (OFL) 1.1.
---
*This project follows the [10 Core Pillars](PILLARS.md). Support quality work [here](https://github.com/sponsors/thisismyurl).*

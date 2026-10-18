# Masthead architecture notes

## Template design notes

Prose HTML comments must never appear inside block markup in `templates/`,
`parts/` or `patterns/`. Core re-saves each block in the editor and compares
the result with the stored markup; a comment inside a block's body makes that
comparison fail, and a loose comment above the first block is read as an
unrecognised block (the WordPress.org review of Colophon, ticket #292760).
`tools/check-templates.py` enforces both. Put design notes here instead.

* **page-blank.html:** this template intentionally omits the header template
  part. A blank canvas page carries no masthead, navigation or utility bar,
  only the page's own content and the footer.

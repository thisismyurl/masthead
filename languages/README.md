# Translation files

Run the following command from the theme root to generate the .pot file:

```
wp i18n make-pot . languages/masthead.pot --domain=masthead --exclude=preview,node_modules,.git
```

The .pot file is not committed because it is generated from source and
would create constant merge conflicts. Generate it locally or as part of
your build pipeline before distribution.

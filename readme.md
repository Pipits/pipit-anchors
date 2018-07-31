# Anchors Template Filter

Anchors is a Perch Template Filter that adds IDs to HTML headings `h1`-`h6` (based on their content) in a `textarea` field.

## Installation

- Download the latest version of the template filter
- Unzip the download
- Place the `PipitTemplateFilter_anchors.class.php` file in the folder `perch/addons/templates/filters/`
- Include the class in the file `perch/addons/templates/filters.php`:

```php
include('filters/PipitTemplateFilter_anchors.class.php');
```

You also need to enable template filters in your config:

```php
define('PERCH_TEMPLATE_FILTERS', true);
```


## Usage

```markup
<perch:content id="text" type="textarea" label="Text" markdown editor="simplemde" filter="anchors">
```

## Use case

You may have a `textarea` field with a Markdown editor:

```markup
<perch:content id="text" type="textarea" label="Text" markdown editor="simplemde">
```

You may enter a heading like so:

```
# This is a heading
```

Regular output is:

```markup
<h1>This is a heading</h1>
```

With the anchors template filter:

```markup
<h1 id="this-is-a-heading">This is a heading</h1>
```

This is useful for long blog posts and documentation as you can share links to particular section `/docs/#how-to-configure`.
# Astina Social Links Bundle

TODO: Add travis

AstinaSocialLinksBundle is basically a wrapper around [oscarotero/social-links](https://github.com/oscarotero/social-links). Its main purpose is to generate social links based on given provider.

[Currently supported providers.](https://github.com/oscarotero/social-links/tree/master/SocialLinks/Providers)

## Install

### Step 1: Add to composer.json

``` yml
"require" :  {
    // ...
    "astina/social-links-bundle":"dev-master",
}
```

### Step 2: Enable the bundle

Enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Astina\Bundle\SocialLinksBundle\AstinaSocialLinksBundle(),
    );
}
```

## Usage

Main functionality of this bundle is to generate a social link for given provider and url. It can be used as an twig extension, like in the example below.

``` twig
{% set url = app.request.uri %}
{{ social_link('facebook', url, {'target': null}) }}
```

This example will return an HTML response which looks like.

``` html
<a href="https://www.facebook.com/sharer.php?s=100&amp;p%5Burl%5D=https%3A%2F%2Fvagrant.astina.io%2Fapp_dev.php%2Fde%2Fkamera-und-zubehoer%2Fx-serie%2Ffujifilm-x100t-black"></a>
```

Helper accepts three parameters - provider as string, url as string and options as array.

Options and default values:

``` php
'title' => null
'text' => null
'target' => '_blank'
'class' => null
'image' => null
```

## Template extending

It is also possible to extend a social link template, by simply adding a socialLink.html.twig template in `app/Resources/AstinaSocialLinksBundle/views/SocialLinks.

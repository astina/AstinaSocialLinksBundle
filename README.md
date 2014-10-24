# Astina Social Links Bundle

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

Main functionality of this bundle is to generate a 

## Template extending

...

TODO: settings describe
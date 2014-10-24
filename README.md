# Astina Social Links Bundle

## Install

### Step 1: Add to composer.json

```
"require" :  {
    // ...
    "astina/redirect-social-links-bundle":"dev-master",
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

TODO: 

### Step 3: Import routing file

Import routing file of bundle. Change prefix attribute to suit your needs.

In YAML:

``` yaml
# app/config/routing.yml
astina_redirect_manager:
    resource: "@AstinaRedirectManagerBundle/Resources/config/routing.yml"
    prefix:   /redirect/
```

### Step 4: Translations

If you wish to use default texts provided in this bundle, you have to make
sure you have translator enabled in your config.

``` yaml
# app/config/config.yml

framework:
    translator: ~
```

### Step 5: Update your DB schema

``` bash
$ php app/console doctrine:schema:update --force
```

TODO:


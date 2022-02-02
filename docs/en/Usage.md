# Usage

## Server Side

After correct configuration you can use the SilverStripe default log functions
and they will sent to rollbar. It will also catch user errors and exceptions.
Another way to call the log functions is by the Rollbar PHP package itself.

```php
<?php

use \Rollbar\Rollbar;
use \Rollbar\Payload\Level;

/**
 * Depending where you call this function you have to call the init function
 * before.
 *
 * use CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration;
 *
 * $rollbarConfig = RollbarConfiguration::config();
 *
 * Rollbar::init(
 *     RollbarConfiguration::getConfigArray(),
 *     $rollbarConfig->get('handleException'),
 *     $rollbarConfig->get('handleError'),
 *     $rollbarConfig->get('handleFatal')
 * );
 */

Rollbar::log(Level::INFO, 'testing info level');
```
To get more information about SilverStripe logging take a look at the documentation:
[SilverStripe Logging](https://docs.silverstripe.org/en/4/developer_guides/debugging/error_handling/)

## Client Side

To use the client side RollbarJS you have to include a template marker: **{RollbarJS}**

For Example inside your head tag:
```html
<!-- Page.ss -->
<html>
    <head>
        {RollbarJS}
    </head>
    <body>
    </body>
</html>
```

after this you can access the global **Rollbar** variable:

```js
Rollbar.log('logging test');
```

Note that also window.onerror events will be caught.

## Links

* [SilverStripe Logging Guide](https://docs.silverstripe.org/en/4/developer_guides/debugging/error_handling/)
* [RollbarJS Docs](https://docs.rollbar.com/docs/browser-js)
* [RollbarPHP Docs](https://docs.rollbar.com/docs/php)

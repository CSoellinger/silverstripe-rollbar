# SilverStripe Rollbar Module

This is a very configurable module for the [Rollbar Logging Service](https://rollbar.com/). Implementing the [Rollbar PHP](https://github.com/rollbar/rollbar-php) library including the rollbar js helper for client side logging in your SilverStripe application. Easy to use by injecting the log handler, setting the api key and optionally inserting a template helper called *{RollbarJS}* for the client code.

# SilverStripe supported module skeleton

A useful skeleton to more easily create a [Silverstripe Module](https://docs.silverstripe.org/en/4/developer_guides/extending/modules/) that conform to the
[Module Standard](https://docs.silverstripe.org/en/developer_guides/extending/modules/#module-standard).

This readme contains descriptions of the parts of this module base you should customise to meet you own module needs.
For example, the module name in the H1 above should be you own module name, and the description text you are reading now
is where you should provide a good short explanation of what your module does.

Where possible we have included default text that can be included as is into your module and indicated in
other places where you need to customise it

Below is a template of the sections of your readme.md you should ideally include to met the Module Standard
and help others make use of your modules.

### Steps to prepare this module for your own use:

- Clone this repository into a folder
- Add your name/organisation to `LICENSE.md`
- Update this readme with information about your module. Ensure sections that aren't relevant are deleted and
placeholders are edited where relevant
- Review the README files in the various provided directories. You should replace these with `.gitkeep` or delete the
directories
- Update the module's `composer.json` with your requirements and package name
- Update (or remove) `package.json` with your requirements and package name. Run `yarn` (or remove `yarn.lock`) to
ensure dependencies resolve correctly
- Clear the git history by running `rm -rf .git && git init`
- Add and push to a VCS repository
- Either [publish](https://getcomposer.org/doc/02-libraries.md#publishing-to-packagist) the module on packagist.org, or add a [custom repository](https://getcomposer.org/doc/02-libraries.md#publishing-to-a-vcs) to your main `composer.json`
- Require the module in your main `composer.json`
- If you need to build a JS client
  - Ensure that `vendor/silverstripe/admin` is installed with `composer install --prefer-source` instead of the default `--prefer-dist`.  You may need to first remove the module from the vendor folder.
  - Install third party dependencies in your module AND in `vendor/silverstripe/admin` by running `yarn install` in both locations
- Start developing your module!

## Requirements

* SilverStripe ^4.0 to ^4.9
* Rollbar API key

## Installation

```
composer require csoellinger/silverstripe-rollbar
```

## License
See [License](license.md)

We have included a 3-clause BSD license you can use as a default. We advocate for the BSD license as it is one of the most permissive and open licenses.

## Documentation
 * [Documentation readme](docs/en/index.md)

## Configuration

To set the API key and the log handler as logger interface you have to set this config:

```yaml
CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration:
  access_token: Your Access Token
CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration:
  accessToken: Your Client Access Token
SilverStripe\Core\Injector\Injector:
  RollbarLogHandler:
    class: CSoellinger\SilverStripeRollbar\Log\RollbarLogHandler
  Psr\Log\LoggerInterface:
    calls:
      RollbarLogHandler: [pushHandler, ["%$RollbarLogHandler"]]
```

## Maintainers
 * CSoellinger <zerogiven@gmail.com>

## Bugtracker
Bugs are tracked in the issues section of this repository. Before submitting an issue please read over
existing issues to ensure yours is unique.

If the issue does look like a new bug:

 - Create a new issue
 - Describe the steps required to reproduce your issue, and the expected outcome. Unit tests, screenshots
 and screencasts can help here.
 - Describe your environment as detailed as possible: SilverStripe version, Browser, PHP version,
 Operating System, any installed SilverStripe modules.

Please report security issues to the module maintainers directly. Please don't file security issues in the bugtracker.

## Development and contribution
If you would like to make contributions to the module please ensure you raise a pull request and discuss with the module maintainers.

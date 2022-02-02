# Configuration

These are the minimum configurations needed for rollbar.

## Server

```yaml
CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration:
  access_token: Your Access Token
SilverStripe\Core\Injector\Injector:
  RollbarLogHandler:
    class: CSoellinger\SilverStripeRollbar\Log\RollbarLogHandler
  Psr\Log\LoggerInterface:
    calls:
      RollbarLogHandler: [pushHandler, ["%$RollbarLogHandler"]]
```

To see all configuration options take a look at the [API Documentation](api/CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md) or the [Rollbar docs](https://docs.rollbar.com/docs/php-configuration-reference)

## Client

```yaml
CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration:
  accessToken: Your Client Access Token
```

To see all configuration options take a look at the [API Documentation](api/CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md) or the [Rollbar docs](https://docs.rollbar.com/docs/rollbarjs-configuration-reference)

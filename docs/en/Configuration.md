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

### Default config

```php
<?php
class RollbarConfiguration
{
    private static $access_token = '';

    private static $agent_log_location = '/var/www';

    private static $allow_exec = true;

    private static $autodetect_branch = false;

    private static $branch;

    private static $capture_email = false;

    private static $capture_ip = true;

    private static $capture_username = false;

    private static $capture_error_stacktraces = true;

    private static $check_ignore = null;

    private static $code_version = '';

    private static $custom = [];

    private static $custom_data_method;

    private static $custom_truncation;

    private static $ca_cert_path;

    private static $enabled = true;

    private static $endpoint = 'https://api.rollbar.com/api/1/';

    private static $error_sample_rates = [];

    private static $exception_sample_rates = [];

    private static $fluent_host = '127.0.0.1';

    private static $fluent_port = 24224;

    private static $fluent_tag = 'rollbar';

    private static $handler = 'blocking';

    private static $included_errno =
        (E_ERROR | E_WARNING | E_PARSE | E_CORE_ERROR | E_USER_ERROR | E_RECOVERABLE_ERROR);

    private static $include_error_code_context = false;

    private static $include_exception_code_context = false;

    private static $include_raw_request_body = false;

    private static $local_vars_dump = true;

    private static $log_payload = false;

    private static $minimum_level = 0;

    private static $proxy;

    private static $raise_on_error = false;

    private static $report_suppressed = false;

    private static $scrub_fields = [
        'passwd',
        'password',
        'secret',
        'confirm_password',
        'password_confirmation',
        'auth_token',
        'csrf_token',
    ];

    private static $scrub_safelist = [];

    private static $timeout = 3;

    private static $transmit = true;

    private static $use_error_reporting = false;

    private static $send_message_trace = false;

    private static $verbose = 'none';

    private static $max_nesting_depth = -1;

    private static $max_items = 10;

    private static $handleException = true;

    private static $handleError = true;

    private static $handleFatal = true;
}
```

## Client

```yaml
CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration:
  accessToken: Your Client Access Token
```

To see all configuration options take a look at the [API Documentation](api/CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md) or the [Rollbar docs](https://docs.rollbar.com/docs/rollbarjs-configuration-reference)

### Default Config

```php
<?php

class RollbarJsConfiguration
{
    private static $accessToken = '';

    private static $addErrorContext = false;

    private static $autoInstrument = [
        'network' => true,
        'log' => true,
        'dom' => true,
        'navigation' => true,
        'connectivity' => true,
    ];

    private static $captureIp = true;

    private static $captureUsername = false;

    private static $captureEmail = false;

    private static $captureUncaught = false;

    private static $captureUnhandledRejections = false;

    private static $enabled = true;

    private static $endpoint = 'https://api.rollbar.com/api/1/item';

    private static $hostBlockList;

    private static $hostSafeList;

    private static $ignoreDuplicateErrors = true;

    private static $includeItemsInTelemetry = true;

    private static $logLevel = 'debug';

    private static $maxRetries;

    private static $maxTelemetryEvents = 100;

    private static $overwriteScrubFields = false;

    private static $reportLevel = 'debug';

    private static $retryInterval;

    private static $scrubFields = [
        'pw',
        'pass',
        'passwd',
        'password',
        'secret',
        'confirm_password',
        'confirmPassword',
        'password_confirmation',
        'passwordConfirmation',
        'access_token',
        'accessToken',
        'secret_key',
        'secretKey',
        'secretToken',
        'cc-number',
        'card number',
        'cardnumber',
        'cardnum',
        'ccnum',
        'ccnumber',
        'cc num',
        'creditcardnumber',
        'credit card number',
        'newcreditcardnumber',
        'new credit card',
        'creditcardno',
        'credit card no',
        'card#',
        'card #',
        'cc-csc',
        'cvc2',
        'cvv2',
        'ccv2',
        'security code',
        'card verification',
        'name on credit card',
        'name on card',
        'nameoncard',
        'cardholder',
        'card holder',
        'name des karteninhabers',
        'card type',
        'cardtype',
        'cc type',
        'cctype',
        'payment type',
        'expiration date',
        'expirationdate',
        'expdate',
        'cc-exp',
    ];

    private static $scrubPaths;

    private static $scrubTelemetryInputs = false;

    private static $sendConfig = false;

    private static $stackTraceLimit;

    private static $timeout;

    private static $transmit = true;

    private static $uncaughtErrorLevel = 'error';

    private static $verbose = false;

    private static $wrapGlobalEventHandlers = true;

    private static $payload = [
        'client' => [
            'javascript' => [
                'code_version' => null,
                'source_map_enabled' => false,
                'guess_uncaught_frames' => false,
            ],
        ],
        'server' => [
            'branch' => 'master',
            'root' => null,
        ],
    ];
}
```

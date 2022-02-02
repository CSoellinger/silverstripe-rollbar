<?php

namespace CSoellinger\SilverStripeRollbar\Configuration;

use Exception;
use ReflectionClass;
use SilverStripe\Control\Controller;
use SilverStripe\Control\Director;
use SilverStripe\Core\Config\Configurable;
use SilverStripe\Core\Injector\Injectable;
use SilverStripe\Security\Security;

/**
 * RollbarJS configuration class. Values should be set inside yaml file.
 *
 * @see https://docs.rollbar.com/docs/rollbarjs-configuration-reference
 * @example Configuration
 *
 * ```yaml
 * # ...
 * CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration:
 *   accessToken: XxxXxxXxxX
 *   captureUncaught: true
 *   captureUnhandledRejections: true
 *   captureEmail: true
 *   captureUsername: true
 * # ...
 * ```
 */
class RollbarJsConfiguration
{
    use Injectable;
    use Configurable;

    /**
     * Sets the access token used to send payloads to Rollbar.
     *
     * Items sent through a given access token arrive in that access token's project and respect the rate limits set on
     * that access token.
     *
     * @var string
     * @phpstan-ignore-next-line
     */
    private static $accessToken = '';

    /**
     * Enables adding error context to the payload. For exception payloads, the error context will be read from
     * ```error.rollbarContext```.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $addErrorContext = false;

    /**
     * An object or boolean describing what events to automatically collect. If this value is false then we collect
     * nothing, if it is true we collect everything, otherwise we do not collect events for the keys with a false value.
     * For more information on the possible structure of this object, please see
     * https://docs.rollbar.com/v1.0.0/docs/rollbarjs-telemetry.
     *
     * @var array<string,mixed>
     * @phpstan-ignore-next-line
     */
    private static $autoInstrument = [
        'network' => true,
        'log' => true,
        'dom' => true,
        'navigation' => true,
        'connectivity' => true,
    ];

    /**
     * For browser settings, this determines how we attempt to capture IP addresses from the client that submits items.
     * For server settings, this determines how we capture IP addresses from requests.
     *
     * Possible values are: ```true```, ```false```, or ```'anonymize'```.
     *
     * If true then we will attempt to capture and store the full IP address of the client. If set to ```'anonymize'```
     * we will do a semi-anonymization on the captured IP address by masking out the least significant bits. If set to
     * false we will not attempt to capture any IP address.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $captureIp = true;

    /**
     * Track user's username. Pursuant to General Data Protection Regulation (GDPR) (EU) 2016/679 this option is set to
     * ```false``` by default. If you want to capture your users' username, make sure you have their consent as required
     * by the regulation.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $captureUsername = false;

    /**
     * Track user's email address. Pursuant to General Data Protection Regulation (GDPR) (EU) 2016/679 this option is
     * set to ```false``` by default. If you want to capture your users' email addresses, make sure you have their
     * consent as required by the regulation.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $captureEmail = false;

    /**
     * This determines whether or not the client reports all uncaught exceptions to Rollbar by default.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $captureUncaught = false;

    /**
     * This determines whether or not the client reports all uncaught rejections to Rollbar by default.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $captureUnhandledRejections = false;

    /**
     * tbd.
     *
     * @var
     */
    // private static $checkIgnore;

    /**
     * If set to ```false```, no data will be sent to Rollbar for this notifier.
     *
     * Note: callbacks for errors will not be called if this is set to ```false```.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $enabled = true;

    /**
     * The url to which items get POSTed. This is mostly relevant to our enterprise customers. You will, however, need
     * this if you're proxying the requests through your own server, or you're an enterprise customer.
     *
     * @var string
     * @phpstan-ignore-next-line
     */
    private static $endpoint = 'https://api.rollbar.com/api/1/item';

    /**
     * Check payload frames for blocklisted URL patterns. This is an array of strings, each of which get compiled to a
     * ```RegExp```. If a file in the trace matches one of these URL patterns, the payload is ignored.
     *
     * @var string[]
     * @phpstan-ignore-next-line
     */
    private static $hostBlockList;

    /**
     * Check payload frames for safelisted URL patterns. This is an array of strings, each of which get compiled to a
     * ```RegExp```. If a file in the trace matches one of these URL patterns, the payload is accepted. When you specify
     * a domain, that will safelist all subdomains of that domain.
     *
     * @var string[]
     * @phpstan-ignore-next-line
     */
    private static $hostSafeList;

    /**
     * When false, transmit all error events including consecutive duplicate errors. When true, only send the first
     * error when identical consecutive errors are detected.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $ignoreDuplicateErrors = true;

    /**
     * This option determines if the client includes previously logged items to Rollbar in the queue of telemetry
     * events. This includes both direct calls and indirect calls via uncaught exceptions.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $includeItemsInTelemetry = true;

    /**
     * The severity level used for calls to ```Rollbar.log()```. One of ```"critical"```, ```"error"```,
     * ```"warning"```, ```"info"```, ```"debug"```.
     *
     * @var string
     * @phpstan-ignore-next-line
     */
    private static $logLevel = 'debug';

    /**
     * Sets the per-payload maximum number of retries sending to the Rollbar API. Currently supported in browser only.
     *
     * @var null|int
     * @phpstan-ignore-next-line
     */
    private static $maxRetries;

    /**
     * This determines the size of the in-memory queue of telemetry events that gets built up over the lifecycle of a
     * user interacting with your app. The size of the queue is fixed to be in the interval [0, 100], so while you can
     * lower the size of the queue from 100, currently you can not increase the size of the queue beyond 100.
     *
     * @var int
     * @phpstan-ignore-next-line
     */
    private static $maxTelemetryEvents = 100;

    /**
     * tbd.
     *
     * @var
     */
    // private static $onSendCallback;

    /**
     * If this is ```true``` then only the fields set in your configured ```scrubFields``` array will be used for
     * scrubbing. If this is ```false``` or not present, then the value set in ```scrubFields``` will be appended to
     * the default list of fields.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $overwriteScrubFields = false;

    /**
     * Used to filter out which messages will get reported to Rollbar. If set to ```"error"```, only ```"error"``` or
     * higher severity level items will be sent to Rollbar.
     *
     * @var string
     * @phpstan-ignore-next-line
     */
    private static $reportLevel = 'debug';

    /**
     * Number of milliseconds between retries. If set, errors will be queued up in the event of a connection failure
     * where we are unable to push the errors to Rollbar. Once a connection has been re-established, the queue will be
     * flushed. If null, then connection failure will not be detected and errors will not be queued.
     *
     * @var null|int
     * @phpstan-ignore-next-line
     */
    private static $retryInterval;

    /**
     * A list containing names of keys/fields/query parameters to override the default scrubbing parameters. Scrubbed
     * fields will be normalized to all ```*``` before being reported to Rollbar. This is useful for sensitive
     * information that you do not want to send to Rollbar. e.g. User tokens.
     *
     * **NOTE:**
     * _Setting scrubFields will append this value to the default set of fields. If you wish to overwrite the defaults,
     * then make sure to set ```overwriteScrubFields``` to ```true```._
     *
     * @var string[]
     * @phpstan-ignore-next-line
     */
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

    /**
     * A list of exact paths to scrub in the payload. The scrub location is described using dot notation.
     *
     * @var null|string[]
     *
     * @example scrubPaths
     *
     * ```js
     * scrubPaths: ['request.query_string', 'client.javascript.plugins']
     * ```
     *
     * @phpstan-ignore-next-line
     */
    private static $scrubPaths;

    /**
     * This is used for scrubbing telemetry-specific data related to inputs in the dom. If this is set to ```true```
     * then no input values will be included in the telemetry events.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $scrubTelemetryInputs = false;

    /**
     * Include the configuration for Rollbar with each item sent to Rollbar. This can aid in debugging configuration
     * issues.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $sendConfig = false;

    /**
     * Node.js and some browsers, including Chrome and Safari, default to returning a maximum of 10 stack frames for any
     * thrown ```Error```. This option allows setting a larger maximum limit (e.g. 50).
     *
     * @var null|int
     * @phpstan-ignore-next-line
     */
    private static $stackTraceLimit;

    /**
     * Set the network timeout for Rollbar API requests in milliseconds. Currently supported in browser only.
     *
     * @var null|int
     * @phpstan-ignore-next-line
     */
    private static $timeout;

    /**
     * tbd.
     *
     * @var
     */
    // private static $transform;

    /**
     * Determines whether to send Rollbar events to the Rollbar API. When unset, events will be fully processed, but not
     * sent.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $transmit = true;

    /**
     * The severity level used when uncaught errors are reported to Rollbar.
     *
     * @var string
     * @phpstan-ignore-next-line
     */
    private static $uncaughtErrorLevel = 'error';

    /**
     * This determines whether or not the client also logs to ```console.log```, in addition to sending the item to
     * Rollbar.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $verbose = false;

    /**
     * In the browser environment, Rollbar wraps many global event handlers in order to provide more detailed
     * information when an error occurs in one of these handlers. Set this flag false to disable these wrappers.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $wrapGlobalEventHandlers = true;

    /**
     * Payload data.
     *
     * @var array<string,mixed>
     * @phpstan-ignore-next-line
     */
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

    /**
     * Get all configs as an associative array.
     *
     * @return array<string,mixed>
     */
    public static function __toArray()
    {
        $reflect = new ReflectionClass(self::class);
        $options = array_keys($reflect->getStaticProperties());
        $config = [];

        foreach ($options as $option) {
            $config[$option] = self::config()->get($option);
        }

        return $config;
    }

    /**
     * Get rollbar ready config with pre filled values like environment, host, root and person(_fn).
     *
     * @uses Controller::curr                   Get current controller for session SecurityID and current url
     * @uses Director::get_environment_type     Get "dev", "test" or "live"
     * @uses Director::host                     Get current hostname
     *
     * @return array<string,mixed>
     */
    public static function getConfigArray()
    {
        $config = self::__toArray();

        if ($config['accessToken'] === '' || $config['accessToken'] === null) {
            throw new Exception('No rollbar access token set.');
        }

        $ctrl = Controller::curr();
        $sessionId = $ctrl->getRequest()->getSession()->get('SecurityID');

        $config['payload'] = array_merge([
            'person' => self::getPerson(),
            'context' => $ctrl->getRequest()->getURL(),
            'sessionId' => $sessionId,
            'environment' => Director::get_environment_type(),
            'server' => [
                'host' => Director::host(),
                // 'root' => Director::baseFolder(),
            ],
        ], (array) $config['payload']);

        return $config;
    }

    /**
     * Get person data from SilverStripe member if config ```captureUsername``` and/or ```captureEmail``` is set to
     * true.
     *
     * @uses Security::getCurrentUser Get current user from the SilverStripe framework
     *
     * @return null|array<string,int|string>
     */
    private static function getPerson()
    {
        $member = Security::getCurrentUser();

        if ($member === null || (
                (bool) self::config()->get('captureUsername') === false
                && (bool) self::config()->get('captureEmail') === false
            )
        ) {
            return null;
        }

        $person = ['id' => $member->ID];

        if ((bool) self::config()->get('captureUsername') === true) {
            $person['username'] = trim($member->FirstName . ' ' . $member->Surname);
        }

        if ((bool) self::config()->get('captureEmail') === true) {
            $person['email'] = $member->Email;
        }

        return $person;
    }
}

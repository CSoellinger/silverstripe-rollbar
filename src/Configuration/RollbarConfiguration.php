<?php

namespace CSoellinger\SilverStripeRollbar\Configuration;

use CSoellinger\SilverStripeRollbar\Factory\CheckIgnoreFunction;
use CSoellinger\SilverStripeRollbar\Factory\CustomDataFunction;
use Exception;
use ReflectionClass;
use SilverStripe\Control\Director;
use SilverStripe\Core\Config\Configurable;
use SilverStripe\Core\Injector\Injectable;
use SilverStripe\Security\Security;

/**
 * Rollbar configuration class. Values should be set inside yaml file.
 *
 * @link https://docs.rollbar.com/docs/php-configuration-reference
 * @example Configuration
 *
 * ```yaml
 * # ...
 * CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration:
 *   access_token: XxxXxxXxxX
 *   capture_email: true
 *   capture_username: true
 * # ...
 * ```
 */
class RollbarConfiguration
{
    use Injectable;
    use Configurable;

    /**
     * Your project access token.
     *
     * @var string
     * @phpstan-ignore-next-line
     */
    private static $access_token = '';

    /**
     * Path to the directory where agent relay log files should be written. Should not include final slash. Only used
     * when handler is ```agent```.
     *
     * @var string
     * @phpstan-ignore-next-line
     */
    private static $agent_log_location = '/var/www';

    /**
     * If the branch option is not set, we will attempt to call out to git to discover the branch name via the php
     * ```shell_exec``` function call. If you do not want to allow ```shell_exec``` to be called, and therefore possibly
     * to not gather this context if you do not otherwise provide it via the separate configuration option, then set
     * this option to false.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $allow_exec = true;

    /**
     * The SDK will automatically detect what Git branch you are running. This is assuming that you use Git branches in
     * your deployment process. This configuration option requires ```allow_exec``` to be also set to ```true```.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $autodetect_branch = false;

    /**
     * The Git branch you are running.
     *
     * @var null|string
     * @phpstan-ignore-next-line
     */
    private static $branch;

    /**
     * Track user's email address. Pursuant to General Data Protection Regulation (GDPR) (EU) 2016/679 this option is
     * set to ```false``` by default. If you want to capture your users' email addresses, make sure you have their
     * consent as required by the regulation.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $capture_email = false;

    /**
     * Track user's IP address.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $capture_ip = true;

    /**
     * Track user's username. Pursuant to General Data Protection Regulation (GDPR) (EU) 2016/679 this option is set to
     * ```false``` by default. If you want to capture your users' username, make sure you have their consent as required
     * by the regulation.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $capture_username = false;

    /**
     * Record full stacktraces for PHP errors.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $capture_error_stacktraces = true;

    /**
     * Function called before sending payload to Rollbar, return true to stop the error from being sent to Rollbar.
     *
     * @var null|string|CheckIgnoreFunction
     * @phpstan-ignore-next-line
     */
    private static $check_ignore = null;

    /**
     * The currently-deployed version of your code/application (e.g. a Git SHA). Should be a string.
     *
     * @var string
     * @phpstan-ignore-next-line
     */
    private static $code_version = '';

    /**
     * An array of key/value pairs which will be merged with the custom data in the final payload of all items sent to
     * Rollbar. This allows for custom data to be added globally to all payloads. Any key in this array which is also
     * present in the custom data passed to a log/debug/error/... call will have the value of the latter.
     *
     * @var array<string,mixed>
     * @phpstan-ignore-next-line
     */
    private static $custom = [];

    /**
     * Allows creating dynamic custom data on runtime during error reporting. The callable taking two parameters $toLog
     * (the context of what's being logged) and ```$context``` (additional context data provided in the config). You
     * provide ```$context``` by adding ```custom_data_method_context``` key to the ```$extra``` or ```$context```
     * parameters ```Rollbar::log``` or ```RollbarLogger::log```. You can see a full example of the application here:
     * https://github.com/rollbar/rollbar-php-examples/tree/master/custom-data-method
     *
     * @var null|string|CustomDataFunction
     * @phpstan-ignore-next-line
     */
    private static $custom_data_method;

    /**
     * A fully qualified name of your custom truncation strategy class. It has to inherit from
     * \Rollbar\Truncation\AbstractStrategy. This custom strategy will be applied before the built-in strategies.
     *
     * @var null|string
     * @phpstan-ignore-next-line
     */
    private static $custom_truncation;

    /**
     * The path to the SSL certificate used when communicating with Rollbar API through the CURL sender.
     *
     * @var null|string
     * @phpstan-ignore-next-line
     */
    private static $ca_cert_path;

    /**
     * Enable or disable Rollbar in your project. This can be changed at runtime with ```Rollbar::enable()``` and
     * ```Rollbar::disable()``` or through ```Rollbar::configure()```.
     *
     * If this is ```false``` then do absolutely nothing, try to be as close to the scenario where Rollbar did not
     * exist at all in the code.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $enabled = true;

    /**
     * The API URL to post to. Note: the URL must end with a trailing slash.
     *
     * @var string
     * @phpstan-ignore-next-line
     */
    private static $endpoint = 'https://api.rollbar.com/api/1/';

    /**
     * Associative array mapping error numbers to sample rates. Sample rates are ratio out of 1, e.g. 0 is
     * "never report", 1 is "always report", and 0.1 is "report 10% of the time". Sampling is done on a per-error basis.
     *
     * @var array<int,float>
     * @phpstan-ignore-next-line
     */
    private static $error_sample_rates = [];

    /**
     * Associative array mapping exception classes to sample rates. Sample rates are ratio out of 1, e.g. 0 is
     * "never report", 1 is "always report", and 0.1 is "report 10% of the time". Sampling is done on a per-exception
     * basis. It also respects class inheritance meaning if Exception is at 1.0 then ExceptionSublcass is also at 1.0,
     * unless explicitly configured otherwise. If ExceptionSubclass is set to 0.5, but Exception is at 1.0 then
     * Exception and all its' subclasses run at 1.0, except for ExceptionSubclass and its' subclasses which run at 0.5.
     * Names of exception classes should NOT be prefixed with additional ```\``` for global namespace, i.e.
     * Rollbar\SampleException and NOT \Rollbar\SampleException.
     *
     * @var array<string,float>
     * @phpstan-ignore-next-line
     */
    private static $exception_sample_rates = [];

    /**
     * Either an ```IPv4```, ```IPv6```, or a Unix socket.
     *
     * @var string
     * @phpstan-ignore-next-line
     */
    private static $fluent_host = '127.0.0.1';

    /**
     * The port on which the fluentd instance is listening on. If you use a unix socket this setting is ignored.
     *
     * @var int
     * @phpstan-ignore-next-line
     */
    private static $fluent_port = 24224;

    /**
     * The tag of your fluentd filter and match sections. It can be any string, please consult the
     * {@see http://docs.fluentd.org fluentd documentation} for valid tags.
     *
     * @var string
     * @phpstan-ignore-next-line
     */
    private static $fluent_tag = 'rollbar';

    /**
     * Either ```blocking```, ```agent```, or ```fluent```. ```blocking``` uses curl to send requests immediately;
     * ```agent``` writes a relay log to be consumed by {@see https://github.com/rollbar/rollbar-agent rollbar-agent};
     * ```fluent``` send the requests to a {@see https://www.fluentd.org/ fluentd} instance and requires the suggested
     * package ```fluent/logger```.
     *
     * @var string
     * @phpstan-ignore-next-line
     */
    private static $handler = 'blocking';

    /**
     * A bitmask that includes all of the error levels to report. E.g. (E_ERROR | E_WARNING) to only report E_ERROR
     * and E_WARNING errors. This will be used in combination with error_reporting() to prevent reporting of errors if
     * use_error_reporting is set to true.
     *
     * @var int
     * @phpstan-ignore-next-line
     */
    private static $included_errno =
        (E_ERROR | E_WARNING | E_PARSE | E_CORE_ERROR | E_USER_ERROR | E_RECOVERABLE_ERROR);

    /**
     * A boolean that indicates you wish to gather code context for instances of PHP Errors. This can take a while
     * because it requires reading the file from disk, so it's off by default.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $include_error_code_context = false;

    /**
     * A boolean that indicates you wish to gather code context for instances of PHP Exceptions. This can take a while
     * because it requires reading the file from disk, so it's off by default.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $include_exception_code_context = false;

    /**
     * Include the raw request body from php://input in payloads. Note: in PHP < 5.6 if you enable this, php://input
     * will be empty for PUT requests as Rollbar SDK will read from it. If you still want to read the request body for
     * your PUT requests Rollbar SDK saves the content of php://input in $_SERVER['php://input']
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $include_raw_request_body = false;

    /**
     * Boolean that determines whether backtraces include arguments passed to stack frames.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $local_vars_dump = true;

    /**
     * Log the payload body to the configured ```log_payload_logger```.
     *
     * If this is true then we output the payload to standard out or a configured logger right before transmitting.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $log_payload = false;

    /**
     * tbd.
     *
     * Use this configuration option to override the default logger used by ```log_payload```. It has to be an object
     * implementing the ```\Psr\Log\LoggerInterface``` interface. Keep in mind this is completely independent of the
     * ```verbose``` configuration option.
     *
     * Note: if you're overriding the logger keep in mind the actual log method is invoked at the ```info``` level for
     * this (independently from the level set in ```verbose``` configuration option).
     *
     * @var [type]
     */
    // private static $log_payload_logger;

    /**
     * The minimum level of occurrences that will be reported to Rollbar.
     *
     * @var int
     * @phpstan-ignore-next-line
     */
    private static $minimum_level = 0;

    /**
     * Send data via a proxy server.
     *
     * E.g. Using a local proxy with no authentication
     * ```php
     * <?php $config['proxy'] = "127.0.0.1:8080";
     * ```
     *
     * E.g. Using a local proxy with basic authentication
     * ```php
     * <?php $config['proxy'] = ['address' => '127.0.0.1:8080', 'username' => 'my_user', 'password' => 'my_password'];
     * ```
     *
     * @var null|string|array<string,string>
     * @phpstan-ignore-next-line
     */
    private static $proxy;

    /**
     * The SDK can be configured to raise exceptions passed to logging methods after reporting to Rollbar. Thanks to
     * this users can make the code below swallow exceptions in production, but throw them in test and dev environments:
     *
     * ```php
     * <?php
     *
     * Rollbar::init([
     *   'access_token' => $this->getTestAccessToken(),
     *   'environment' => $environment,
     *   'raise_on_error' => ($environment == 'test'),
     * ]);
     *
     * try { throw new \Exception(); } catch(\Exception $ex) { Rollbar::log(Level::ERROR, $ex); }
     * ```
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $raise_on_error = false;

    /**
     * Sets whether errors suppressed with '@' should be reported or not
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $report_suppressed = false;

    /**
     * An array of field names to scrub out of the entire payload excluding the top level ```access_token```. Values
     * will be replaced with asterisks. If overriding, make sure to list all fields you want to scrub, not just fields
     * you want to add to the default. Param names are converted to lowercase before comparing against the scrub list.
     *
     * **Note**: watch out to not overlap scrub fields with the keys of the Rollbar API request format. For example,
     * scrubbing for field ```request``` will result in scrubbing all of the request content and API will respond with
     * a 400 error.
     *
     * @var string[]
     * @phpstan-ignore-next-line
     */
    private static $scrub_fields = [
        'passwd',
        'password',
        'secret',
        'confirm_password',
        'password_confirmation',
        'auth_token',
        'csrf_token',
    ];

    /**
     * tbd.
     *
     * @var string[]
     * @phpstan-ignore-next-line
     */
    private static $scrub_safelist = [];

    /**
     * Request timeout for posting to rollbar, in seconds.
     *
     * @var int
     * @phpstan-ignore-next-line
     */
    private static $timeout = 3;

    /**
     * Should the SDK actually perform HTTP requests to Rollbar API. This is useful if you are trying to run Rollbar in
     * dry run mode for development or tests.
     *
     * If this is ```false``` then we do all of the report processing except make the post request at the end of the
     * pipeline.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $transmit = true;

    /**
     * Sets whether to respect current ```error_reporting()``` level or not.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $use_error_reporting = false;

    /**
     * Should backtrace be include with string messages reported to Rollbar.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $send_message_trace = false;

    /**
     * tbd.
     *
     * The class to be used to transform the payload before it gets prepared for sending to Rollbar API. It has to
     * implement ```\Rollbar\TransformerInterface```.
     *
     * For a detailed example, check out our
     * {@see https://github.com/rollbar/rollbar-php-examples/tree/master/transformer examples repository}.
     *
     * @var mixed
     */
    // private static $transformer;

    /**
     * This configuration option controls the verbosity of the internal logs of the SDK.
     *
     * Acceptable values are the levels outlined by {@see https://tools.ietf.org/html/rfc5424 The Syslog Protocol} and
     * {@see https://www.php-fig.org/psr/psr-3 PSR-3} plus ```none``` level for silent:
     * - ```none```
     * - ```debug```
     * - ```info```
     * - ```notice```
     * - ```warning```
     * - ```error```
     * - ```critical```
     * - ```alert```
     * - ```* emergency```
     *
     * @var string
     * @phpstan-ignore-next-line
     */
    private static $verbose = 'none';

    /**
     * tbd.
     *
     * Use this configuration option to override the default logger used by ```verbose``` configuration option. It has
     * to be an object implementing the ```\Psr\Log\LoggerInterface``` interface.
     *
     * @var mixed
     */
    // private static $verbose_logger;

    /**
     * Maximum depth for serialization of payloads. If set to ```-1```, there is no limit.
     *
     * @var int
     * @phpstan-ignore-next-line
     */
    private static $max_nesting_depth = -1;

    /**
     * Maximum number of items sent in a single app request/response cycle. Currently there is no "unlimited" option,
     * set a high value for this number if you want to allow all occurrences to be sent. PHP network activity **will
     * block the main app thread** so the default limit is low for this setting.
     *
     * @var int
     * @phpstan-ignore-next-line
     */
    private static $max_items = 10;

    /**
     * Handle PHP exceptions.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $handleException = true;

    /**
     * Handle PHP errors.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $handleError = true;

    /**
     * Handle PHP fatal errors.
     *
     * @var bool
     * @phpstan-ignore-next-line
     */
    private static $handleFatal = true;

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
     * @uses Director::get_environment_type     Get "dev", "test" or "live"
     * @uses Director::host                     Get current hostname
     * @uses Director::baseFolder               Root folder for the site
     * @uses self::getPerson                    get person details
     *
     * @return array<string,mixed>
     */
    public static function getConfigArray()
    {
        $config = self::__toArray();

        if ($config['access_token'] === '' || $config['access_token'] === null) {
            throw new Exception('No rollbar access token set.');
        }

        $config['environment'] = Director::get_environment_type();
        $config['host'] = Director::get_environment_type();
        $config['root'] = Director::baseFolder();
        $config['person_fn'] = __NAMESPACE__ . '\RollbarConfiguration::getPerson';

        return $config;
    }

    /**
     * Get person data from SilverStripe member if config ```capture_username``` and/or ```capture_email``` is set to
     * true.
     *
     * @uses Security::getCurrentUser Get current user from the SilverStripe framework
     *
     * @return null|array<string,int|string>
     */
    public static function getPerson()
    {
        $member = Security::getCurrentUser();

        if ($member === null || (
                (bool) self::config()->get('capture_username') === false &&
                (bool) self::config()->get('capture_email') === false
            )
        ) {
            return null;
        }

        $person = ['id' => $member->ID];

        if ((bool) self::config()->get('capture_username') === true) {
            $person['username'] = trim($member->FirstName . ' ' . $member->Surname);
        }

        if ((bool) self::config()->get('capture_email') === true) {
            $person['email'] = $member->Email;
        }

        return $person;
    }
}

# CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration | SilverStripe Rollbar Module    

## [SilverStripe Rollbar Module](../../../index.md)

- [Classes](../../../classes.md)
- [Namespaces](../../../namespaces.md)
- [Interfaces](../../../interfaces.md)
- [Traits](../../../traits.md)
- [Index](../../../doc-index.md)
- [Search](../../../search.md)

>class

>    [CSoellinger](../../../CSoellinger.md)` / `[SilverStripeRollbar](../../../CSoellinger/SilverStripeRollbar.md)` / `[Configuration](../../../CSoellinger/SilverStripeRollbar/Configuration.md)` / `(RollbarConfiguration)
## RollbarConfiguration

class **RollbarConfiguration**


Rollbar configuration class. Values should be set inside yaml file.
### Traits


- <abbr title="SilverStripe\Core\Injector\Injectable">Injectable</abbr>
- <abbr title="SilverStripe\Core\Config\Configurable">Configurable</abbr>



### Properties

|   |   |   |   |
|---|---|---|---|
|<a name="property_access_token"></a>static&nbsp;private&nbsp;string|$access_token|Your project access token.||
|<a name="property_agent_log_location"></a>static&nbsp;private&nbsp;string|$agent_log_location|Path to the directory where agent relay log files should be written. Should not include final slash. Only used when handler is ```agent```.||
|<a name="property_allow_exec"></a>static&nbsp;private&nbsp;bool|$allow_exec|If the branch option is not set, we will attempt to call out to git to discover the branch name via the php ```shell_exec``` function call. If you do not want to allow ```shell_exec``` to be called, and therefore possibly to not gather this context if you do not otherwise provide it via the separate configuration option, then set this option to false.||
|<a name="property_autodetect_branch"></a>static&nbsp;private&nbsp;bool|$autodetect_branch|The SDK will automatically detect what Git branch you are running. This is assuming that you use Git branches in your deployment process. This configuration option requires ```allow_exec``` to be also set to ```true```.||
|<a name="property_branch"></a>static&nbsp;private&nbsp;null\|string|$branch|The Git branch you are running.||
|<a name="property_capture_email"></a>static&nbsp;private&nbsp;bool|$capture_email|Track user&#039;s email address. Pursuant to General Data Protection Regulation (GDPR) (EU) 2016/679 this option is set to ```false``` by default. If you want to capture your users&#039; email addresses, make sure you have their consent as required by the regulation.||
|<a name="property_capture_ip"></a>static&nbsp;private&nbsp;bool|$capture_ip|Track user&#039;s IP address.||
|<a name="property_capture_username"></a>static&nbsp;private&nbsp;bool|$capture_username|Track user&#039;s username. Pursuant to General Data Protection Regulation (GDPR) (EU) 2016/679 this option is set to ```false``` by default. If you want to capture your users&#039; username, make sure you have their consent as required by the regulation.||
|<a name="property_capture_error_stacktraces"></a>static&nbsp;private&nbsp;bool|$capture_error_stacktraces|Record full stacktraces for PHP errors.||
|<a name="property_check_ignore"></a>static&nbsp;private&nbsp;null\|string\|[<abbr title="CSoellinger\SilverStripeRollbar\Factory\CheckIgnoreFunction">CheckIgnoreFunction</abbr>](../../../CSoellinger/SilverStripeRollbar/Factory/CheckIgnoreFunction.md)|$check_ignore|Function called before sending payload to Rollbar, return true to stop the error from being sent to Rollbar.||
|<a name="property_code_version"></a>static&nbsp;private&nbsp;string|$code_version|The currently-deployed version of your code/application (e.g. a Git SHA). Should be a string.||
|<a name="property_custom"></a>static&nbsp;private&nbsp;<abbr title="CSoellinger\SilverStripeRollbar\Configuration\array&lt;string,mixed&gt;">array&lt;string,mixed&gt;</abbr>|$custom|An array of key/value pairs which will be merged with the custom data in the final payload of all items sent to Rollbar. This allows for custom data to be added globally to all payloads. Any key in this array which is also present in the custom data passed to a log/debug/error/... call will have the value of the latter.||
|<a name="property_custom_data_method"></a>static&nbsp;private&nbsp;null\|string\|[<abbr title="CSoellinger\SilverStripeRollbar\Factory\CustomDataFunction">CustomDataFunction</abbr>](../../../CSoellinger/SilverStripeRollbar/Factory/CustomDataFunction.md)|$custom_data_method|Allows creating dynamic custom data on runtime during error reporting. The callable taking two parameters $toLog (the context of what&#039;s being logged) and ```$context``` (additional context data provided in the config). You provide ```$context``` by adding ```custom_data_method_context``` key to the ```$extra``` or ```$context``` parameters ```Rollbar::log``` or ```RollbarLogger::log```. You can see a full example of the application here: https://github.com/rollbar/rollbar-php-examples/tree/master/custom-data-method||
|<a name="property_custom_truncation"></a>static&nbsp;private&nbsp;null\|string|$custom_truncation|A fully qualified name of your custom truncation strategy class. It has to inherit from \Rollbar\Truncation\AbstractStrategy. This custom strategy will be applied before the built-in strategies.||
|<a name="property_ca_cert_path"></a>static&nbsp;private&nbsp;null\|string|$ca_cert_path|The path to the SSL certificate used when communicating with Rollbar API through the CURL sender.||
|<a name="property_enabled"></a>static&nbsp;private&nbsp;bool|$enabled|Enable or disable Rollbar in your project. This can be changed at runtime with ```Rollbar::enable()``` and ```Rollbar::disable()``` or through ```Rollbar::configure()```.||
|<a name="property_endpoint"></a>static&nbsp;private&nbsp;string|$endpoint|The API URL to post to. Note: the URL must end with a trailing slash.||
|<a name="property_error_sample_rates"></a>static&nbsp;private&nbsp;<abbr title="CSoellinger\SilverStripeRollbar\Configuration\array&lt;int,float&gt;">array&lt;int,float&gt;</abbr>|$error_sample_rates|Associative array mapping error numbers to sample rates. Sample rates are ratio out of 1, e.g. 0 is &quot;never report&quot;, 1 is &quot;always report&quot;, and 0.1 is &quot;report 10% of the time&quot;. Sampling is done on a per-error basis.||
|<a name="property_exception_sample_rates"></a>static&nbsp;private&nbsp;<abbr title="CSoellinger\SilverStripeRollbar\Configuration\array&lt;string,float&gt;">array&lt;string,float&gt;</abbr>|$exception_sample_rates|Associative array mapping exception classes to sample rates. Sample rates are ratio out of 1, e.g. 0 is &quot;never report&quot;, 1 is &quot;always report&quot;, and 0.1 is &quot;report 10% of the time&quot;. Sampling is done on a per-exception basis. It also respects class inheritance meaning if Exception is at 1.0 then ExceptionSublcass is also at 1.0, unless explicitly configured otherwise. If ExceptionSubclass is set to 0.5, but Exception is at 1.0 then Exception and all its&#039; subclasses run at 1.0, except for ExceptionSubclass and its&#039; subclasses which run at 0.5.||
|<a name="property_fluent_host"></a>static&nbsp;private&nbsp;string|$fluent_host|Either an ```IPv4```, ```IPv6```, or a Unix socket.||
|<a name="property_fluent_port"></a>static&nbsp;private&nbsp;int|$fluent_port|The port on which the fluentd instance is listening on. If you use a unix socket this setting is ignored.||
|<a name="property_fluent_tag"></a>static&nbsp;private&nbsp;string|$fluent_tag|The tag of your fluentd filter and match sections. It can be any string, please consult the {http://docs.fluentd.org fluentd documentation} for valid tags.||
|<a name="property_handler"></a>static&nbsp;private&nbsp;string|$handler|Either ```blocking```, ```agent```, or ```fluent```. ```blocking``` uses curl to send requests immediately; ```agent``` writes a relay log to be consumed by {https://github.com/rollbar/rollbar-agent rollbar-agent}; ```fluent``` send the requests to a {https://www.fluentd.org/ fluentd} instance and requires the suggested package ```fluent/logger```.||
|<a name="property_included_errno"></a>static&nbsp;private&nbsp;int|$included_errno|A bitmask that includes all of the error levels to report. E.g. (E_ERROR | E_WARNING) to only report E_ERROR and E_WARNING errors. This will be used in combination with error_reporting() to prevent reporting of errors if use_error_reporting is set to true.||
|<a name="property_include_error_code_context"></a>static&nbsp;private&nbsp;bool|$include_error_code_context|A boolean that indicates you wish to gather code context for instances of PHP Errors. This can take a while because it requires reading the file from disk, so it&#039;s off by default.||
|<a name="property_include_exception_code_context"></a>static&nbsp;private&nbsp;bool|$include_exception_code_context|A boolean that indicates you wish to gather code context for instances of PHP Exceptions. This can take a while because it requires reading the file from disk, so it&#039;s off by default.||
|<a name="property_include_raw_request_body"></a>static&nbsp;private&nbsp;bool|$include_raw_request_body|Include the raw request body from php://input in payloads. Note: in PHP &lt; 5.6 if you enable this, php://input will be empty for PUT requests as Rollbar SDK will read from it. If you still want to read the request body for your PUT requests Rollbar SDK saves the content of php://input in $_SERVER[&#039;php://input&#039;]||
|<a name="property_local_vars_dump"></a>static&nbsp;private&nbsp;bool|$local_vars_dump|Boolean that determines whether backtraces include arguments passed to stack frames.||
|<a name="property_log_payload"></a>static&nbsp;private&nbsp;bool|$log_payload|Log the payload body to the configured ```log_payload_logger```.||
|<a name="property_minimum_level"></a>static&nbsp;private&nbsp;int|$minimum_level|The minimum level of occurrences that will be reported to Rollbar.||
|<a name="property_proxy"></a>static&nbsp;private&nbsp;null\|string\|<abbr title="CSoellinger\SilverStripeRollbar\Configuration\array&lt;string,string&gt;">array&lt;string,string&gt;</abbr>|$proxy|Send data via a proxy server.||
|<a name="property_raise_on_error"></a>static&nbsp;private&nbsp;bool|$raise_on_error|The SDK can be configured to raise exceptions passed to logging methods after reporting to Rollbar. Thanks to this users can make the code below swallow exceptions in production, but throw them in test and dev environments:||
|<a name="property_report_suppressed"></a>static&nbsp;private&nbsp;bool|$report_suppressed|Sets whether errors suppressed with &#039;@&#039; should be reported or not||
|<a name="property_scrub_fields"></a>static&nbsp;private&nbsp;string[]|$scrub_fields|An array of field names to scrub out of the entire payload excluding the top level ```access_token```. Values will be replaced with asterisks. If overriding, make sure to list all fields you want to scrub, not just fields you want to add to the default. Param names are converted to lowercase before comparing against the scrub list.||
|<a name="property_scrub_whitelist"></a>static&nbsp;private&nbsp;string[]|$scrub_whitelist|Array of fields that you do NOT want to be scrubbed even if they match entries in scrub_fields. Entries should be provided in associative array dot notation, i.e. ```data.person.username```.||
|<a name="property_timeout"></a>static&nbsp;private&nbsp;int|$timeout|Request timeout for posting to rollbar, in seconds.||
|<a name="property_transmit"></a>static&nbsp;private&nbsp;bool|$transmit|Should the SDK actually perform HTTP requests to Rollbar API. This is useful if you are trying to run Rollbar in dry run mode for development or tests.||
|<a name="property_use_error_reporting"></a>static&nbsp;private&nbsp;bool|$use_error_reporting|Sets whether to respect current ```error_reporting()``` level or not.||
|<a name="property_send_message_trace"></a>static&nbsp;private&nbsp;bool|$send_message_trace|Should backtrace be include with string messages reported to Rollbar.||
|<a name="property_verbose"></a>static&nbsp;private&nbsp;string|$verbose|This configuration option controls the verbosity of the internal logs of the SDK.||
|<a name="property_max_nesting_depth"></a>static&nbsp;private&nbsp;int|$max_nesting_depth|Maximum depth for serialization of payloads. If set to ```-1```, there is no limit.||
|<a name="property_max_items"></a>static&nbsp;private&nbsp;int|$max_items|Maximum number of items sent in a single app request/response cycle. Currently there is no &quot;unlimited&quot; option, set a high value for this number if you want to allow all occurrences to be sent. PHP network activity **will block the main app thread** so the default limit is low for this setting.||
|<a name="property_handleException"></a>static&nbsp;private&nbsp;bool|$handleException|Handle PHP exceptions.||
|<a name="property_handleError"></a>static&nbsp;private&nbsp;bool|$handleError|Handle PHP errors.||
|<a name="property_handleFatal"></a>static&nbsp;private&nbsp;bool|$handleFatal|Handle PHP fatal errors.||
### Methods

|   |   |   |   |
|---|---|---|---|
|static&nbsp;<abbr title="CSoellinger\SilverStripeRollbar\Configuration\array&lt;string,mixed&gt;">array&lt;string,mixed&gt;</abbr>|<a name="#method___toArray"></a>__toArray()|Get all configs as an associative array.||
|static&nbsp;<abbr title="CSoellinger\SilverStripeRollbar\Configuration\array&lt;string,mixed&gt;">array&lt;string,mixed&gt;</abbr>|<a name="#method_getConfigArray"></a>getConfigArray()|Get rollbar ready config with pre filled values like environment, host, root and person(_fn).||
|static&nbsp;null\|<abbr title="CSoellinger\SilverStripeRollbar\Configuration\array&lt;string,int">array&lt;string,int</abbr>\|<abbr title="CSoellinger\SilverStripeRollbar\Configuration\string&gt;">string&gt;</abbr>|<a name="#method_getPerson"></a>getPerson()|Get person data from SilverStripe member if config ```capture_username``` and/or ```capture_email``` is set to. true.||


### Details
<a name id="method___toArray"></a>

### 
static <abbr title="CSoellinger\SilverStripeRollbar\Configuration\array&lt;string,mixed&gt;">array&lt;string,mixed&gt;</abbr> **__toArray**()

at line 532

Get all configs as an associative array.        

#### Return Value

|   |   |
|---|---|
|<abbr title="CSoellinger\SilverStripeRollbar\Configuration\array&lt;string,mixed&gt;">array&lt;string,mixed&gt;</abbr>|

<a name id="method_getConfigArray"></a>

### 
static <abbr title="CSoellinger\SilverStripeRollbar\Configuration\array&lt;string,mixed&gt;">array&lt;string,mixed&gt;</abbr> **getConfigArray**()

at line 555

Get rollbar ready config with pre filled values like environment, host, root and person(_fn).        

#### Return Value

|   |   |
|---|---|
|<abbr title="CSoellinger\SilverStripeRollbar\Configuration\array&lt;string,mixed&gt;">array&lt;string,mixed&gt;</abbr>|

<a name id="method_getPerson"></a>

### 
static null\|<abbr title="CSoellinger\SilverStripeRollbar\Configuration\array&lt;string,int">array&lt;string,int</abbr>\|<abbr title="CSoellinger\SilverStripeRollbar\Configuration\string&gt;">string&gt;</abbr> **getPerson**()

at line 579

Get person data from SilverStripe member if config ```capture_username``` and/or ```capture_email``` is set to
true.        

#### Return Value

|   |   |
|---|---|
|null\|<abbr title="CSoellinger\SilverStripeRollbar\Configuration\array&lt;string,int">array&lt;string,int</abbr>\|<abbr title="CSoellinger\SilverStripeRollbar\Configuration\string&gt;">string&gt;</abbr>|

_Generated by [Doctum, a API Documentation generator and fork of Sami](https://github.com/code-lts/doctum)._
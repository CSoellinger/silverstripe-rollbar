# Index | SilverStripe Rollbar Module

## [SilverStripe Rollbar Module](index.md)

- [Classes](classes.md)
- [Namespaces](namespaces.md)
- [Interfaces](interfaces.md)
- [Traits](traits.md)
- [Index](doc-index.md)
- [Search](search.md)

## Index

- [A](#letterA)
- ~~[B](#letterB)~~
- [C](#letterC)
- ~~[D](#letterD)~~
- [E](#letterE)
- [F](#letterF)
- [G](#letterG)
- [H](#letterH)
- [I](#letterI)
- ~~[J](#letterJ)~~
- ~~[K](#letterK)~~
- [L](#letterL)
- [M](#letterM)
- ~~[N](#letterN)~~
- ~~[O](#letterO)~~
- [P](#letterP)
- ~~[Q](#letterQ)~~
- [R](#letterR)
- [S](#letterS)
- [T](#letterT)
- [U](#letterU)
- [V](#letterV)
- ~~[W](#letterW)~~
- ~~[X](#letterX)~~
- ~~[Y](#letterY)~~
- ~~[Z](#letterZ)~~

    A<a name="letterA"></a>
        <a name="indexA"></a>

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_access_token](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#access_token) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Your project access token.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_agent_log_location](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#agent_log_location) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Path to the directory where agent relay log files should be written. Should not include final slash. Only used
when handler is ```agent```.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_allow_exec](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#allow_exec) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(If the branch option is not set, we will attempt to call out to git to discover the branch name via the php
```shell_exec``` function call. If you do not want to allow ```shell_exec``` to be called, and therefore possibly
to not gather this context if you do not otherwise provide it via the separate configuration option, then set
this option to false.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_autodetect_branch](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#autodetect_branch) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(The SDK will automatically detect what Git branch you are running. This is assuming that you use Git branches in
your deployment process. This configuration option requires ```allow_exec``` to be also set to ```true```.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_accessToken](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#accessToken) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(Sets the access token used to send payloads to Rollbar.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_addErrorContext](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#addErrorContext) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(Enables adding error context to the payload. For exception payloads, the error context will be read from
```error.rollbarContext```.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_autoInstrument](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#autoInstrument) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(An object or boolean describing what events to automatically collect. If this value is false then we collect
nothing, if it is true we collect everything, otherwise we do not collect events for the keys with a false value.)B<a name="letterB"></a>
        <a name="indexB"></a>

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_branch](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#branch) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(The Git branch you are running.)C<a name="letterC"></a>
        <a name="indexC"></a>

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_capture_email](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#capture_email) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Track user's email address. Pursuant to General Data Protection Regulation (GDPR) (EU) 2016/679 this option is
set to ```false``` by default. If you want to capture your users' email addresses, make sure you have their
consent as required by the regulation.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_capture_ip](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#capture_ip) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Track user's IP address.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_capture_username](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#capture_username) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Track user's username. Pursuant to General Data Protection Regulation (GDPR) (EU) 2016/679 this option is set to
```false``` by default. If you want to capture your users' username, make sure you have their consent as required
by the regulation.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_capture_error_stacktraces](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#capture_error_stacktraces) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Record full stacktraces for PHP errors.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_check_ignore](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#check_ignore) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Function called before sending payload to Rollbar, return true to stop the error from being sent to Rollbar.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_code_version](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#code_version) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(The currently-deployed version of your code/application (e.g. a Git SHA). Should be a string.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_custom](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#custom) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(An array of key/value pairs which will be merged with the custom data in the final payload of all items sent to
Rollbar. This allows for custom data to be added globally to all payloads. Any key in this array which is also
present in the custom data passed to a log/debug/error/... call will have the value of the latter.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_custom_data_method](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#custom_data_method) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Allows creating dynamic custom data on runtime during error reporting. The callable taking two parameters $toLog
(the context of what's being logged) and ```$context``` (additional context data provided in the config). You
provide ```$context``` by adding ```custom_data_method_context``` key to the ```$extra``` or ```$context```
parameters ```Rollbar::log``` or ```RollbarLogger::log```. You can see a full example of the application here:
https://github.com/rollbar/rollbar-php-examples/tree/master/custom-data-method)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_custom_truncation](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#custom_truncation) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(A fully qualified name of your custom truncation strategy class. It has to inherit from
\Rollbar\Truncation\AbstractStrategy. This custom strategy will be applied before the built-in strategies.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_ca_cert_path](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#ca_cert_path) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(The path to the SSL certificate used when communicating with Rollbar API through the CURL sender.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_captureIp](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#captureIp) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(For browser settings, this determines how we attempt to capture IP addresses from the client that submits items.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_captureUsername](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#captureUsername) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(Track user's username. Pursuant to General Data Protection Regulation (GDPR) (EU) 2016/679 this option is set to
```false``` by default. If you want to capture your users' username, make sure you have their consent as required
by the regulation.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_captureEmail](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#captureEmail) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(Track user's email address. Pursuant to General Data Protection Regulation (GDPR) (EU) 2016/679 this option is
set to ```false``` by default. If you want to capture your users' email addresses, make sure you have their
consent as required by the regulation.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_captureUncaught](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#captureUncaught) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(This determines whether or not the client reports all uncaught exceptions to Rollbar by default.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_captureUnhandledRejections](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#captureUnhandledRejections) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(This determines whether or not the client reports all uncaught rejections to Rollbar by default.)

- [<abbr title="CSoellinger\SilverStripeRollbar\Factory\CheckIgnoreFunction">CheckIgnoreFunction</abbr>](CSoellinger/SilverStripeRollbar/Factory/CheckIgnoreFunction.md) &mdash; <em>Class in namespace [CSoellinger\SilverStripeRollbar\Factory](CSoellinger/SilverStripeRollbar/Factory.md)(Function called before sending payload to Rollbar, return true to stop the error from being sent to Rollbar.)

- [<abbr title="CSoellinger\SilverStripeRollbar\Factory\CustomDataFunction">CustomDataFunction</abbr>](CSoellinger/SilverStripeRollbar/Factory/CustomDataFunction.md) &mdash; <em>Class in namespace [CSoellinger\SilverStripeRollbar\Factory](CSoellinger/SilverStripeRollbar/Factory.md)(Allows creating dynamic custom data on runtime during error reporting. The callable taking two parameters $toLog
(the context of what's being logged) and ```$context``` (additional context data provided in the config). You
provide ```$context``` by adding ```custom_data_method_context``` key to the ```$extra``` or ```$context```
parameters ```Rollbar::log``` or ```RollbarLogger::log```. You can see a full example of the application here:
https://github.com/rollbar/rollbar-php-examples/tree/master/custom-data-method)E<a name="letterE"></a>
        <a name="indexE"></a>

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_enabled](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#enabled) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Enable or disable Rollbar in your project. This can be changed at runtime with ```Rollbar::enable()``` and
```Rollbar::disable()``` or through ```Rollbar::configure()```.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_endpoint](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#endpoint) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(The API URL to post to. Note: the URL must end with a trailing slash.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_error_sample_rates](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#error_sample_rates) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Associative array mapping error numbers to sample rates. Sample rates are ratio out of 1, e.g. 0 is
"never report", 1 is "always report", and 0.1 is "report 10% of the time". Sampling is done on a per-error basis.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_exception_sample_rates](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#exception_sample_rates) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Associative array mapping exception classes to sample rates. Sample rates are ratio out of 1, e.g. 0 is
"never report", 1 is "always report", and 0.1 is "report 10% of the time". Sampling is done on a per-exception
basis. It also respects class inheritance meaning if Exception is at 1.0 then ExceptionSublcass is also at 1.0,
unless explicitly configured otherwise. If ExceptionSubclass is set to 0.5, but Exception is at 1.0 then
Exception and all its' subclasses run at 1.0, except for ExceptionSubclass and its' subclasses which run at 0.5.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_enabled](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#enabled) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(If set to ```false```, no data will be sent to Rollbar for this notifier.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_endpoint](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#endpoint) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(The url to which items get POSTed. This is mostly relevant to our enterprise customers. You will, however, need
this if you're proxying the requests through your own server, or you're an enterprise customer.)F<a name="letterF"></a>
        <a name="indexF"></a>

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_fluent_host](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#fluent_host) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Either an ```IPv4```, ```IPv6```, or a Unix socket.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_fluent_port](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#fluent_port) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(The port on which the fluentd instance is listening on. If you use a unix socket this setting is ignored.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_fluent_tag](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#fluent_tag) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(The tag of your fluentd filter and match sections. It can be any string, please consult the
{http://docs.fluentd.org fluentd documentation} for valid tags.)G<a name="letterG"></a>
        <a name="indexG"></a>

- [CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#method_getConfigArray](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>::getConfigArray)() &mdash; <em>Method in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Get rollbar ready config with pre filled values like environment, host, root and person(_fn).)

- [CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#method_getPerson](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>::getPerson)() &mdash; <em>Method in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Get person data from SilverStripe member if config ```capture_username``` and/or ```capture_email``` is set to
true.)

- [CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#method_getConfigArray](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>::getConfigArray)() &mdash; <em>Method in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(Get rollbar ready config with pre filled values like environment, host, root and person(_fn).)

- [CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#method_getPerson](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>::getPerson)() &mdash; <em>Method in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(Get person data from SilverStripe member if config ```captureUsername``` and/or ```captureEmail``` is set to
true.)

- [CSoellinger/SilverStripeRollbar/Provider/RollbarJsTemplateProvider.md#method_get_template_global_variables](<abbr title="CSoellinger\SilverStripeRollbar\Provider\RollbarJsTemplateProvider">RollbarJsTemplateProvider</abbr>::get_template_global_variables)() &mdash; <em>Method in class [<abbr title="CSoellinger\SilverStripeRollbar\Provider\RollbarJsTemplateProvider">RollbarJsTemplateProvider</abbr>](CSoellinger/SilverStripeRollbar/Provider/RollbarJsTemplateProvider.md)
(Get the available global variables provided by our template provider.)H<a name="letterH"></a>
        <a name="indexH"></a>

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_handler](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#handler) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Either ```blocking```, ```agent```, or ```fluent```. ```blocking``` uses curl to send requests immediately;
```agent``` writes a relay log to be consumed by {https://github.com/rollbar/rollbar-agent rollbar-agent};
```fluent``` send the requests to a {https://www.fluentd.org/ fluentd} instance and requires the suggested
package ```fluent/logger```.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_handleException](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#handleException) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Handle PHP exceptions.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_handleError](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#handleError) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Handle PHP errors.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_handleFatal](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#handleFatal) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Handle PHP fatal errors.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_hostBlockList](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#hostBlockList) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(Check payload frames for blocklisted URL patterns. This is an array of strings, each of which get compiled to a
```RegExp```. If a file in the trace matches one of these URL patterns, the payload is ignored.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_hostSafeList](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#hostSafeList) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(Check payload frames for safelisted URL patterns. This is an array of strings, each of which get compiled to a
```RegExp```. If a file in the trace matches one of these URL patterns, the payload is accepted. When you specify
a domain, that will safelist all subdomains of that domain.)I<a name="letterI"></a>
        <a name="indexI"></a>

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_included_errno](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#included_errno) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(A bitmask that includes all of the error levels to report. E.g. (E_ERROR | E_WARNING) to only report E_ERROR
and E_WARNING errors. This will be used in combination with error_reporting() to prevent reporting of errors if
use_error_reporting is set to true.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_include_error_code_context](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#include_error_code_context) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(A boolean that indicates you wish to gather code context for instances of PHP Errors. This can take a while
because it requires reading the file from disk, so it's off by default.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_include_exception_code_context](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#include_exception_code_context) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(A boolean that indicates you wish to gather code context for instances of PHP Exceptions. This can take a while
because it requires reading the file from disk, so it's off by default.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_include_raw_request_body](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#include_raw_request_body) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Include the raw request body from php://input in payloads. Note: in PHP < 5.6 if you enable this, php://input
will be empty for PUT requests as Rollbar SDK will read from it. If you still want to read the request body for
your PUT requests Rollbar SDK saves the content of php://input in $_SERVER['php://input'])

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_ignoreDuplicateErrors](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#ignoreDuplicateErrors) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(When false, transmit all error events including consecutive duplicate errors. When true, only send the first
error when identical consecutive errors are detected.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_includeItemsInTelemetry](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#includeItemsInTelemetry) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(This option determines if the client includes previously logged items to Rollbar in the queue of telemetry
events. This includes both direct calls and indirect calls via uncaught exceptions.)L<a name="letterL"></a>
        <a name="indexL"></a>

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_local_vars_dump](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#local_vars_dump) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Boolean that determines whether backtraces include arguments passed to stack frames.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_log_payload](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#log_payload) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Log the payload body to the configured ```log_payload_logger```.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_logLevel](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#logLevel) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(The severity level used for calls to ```Rollbar.log()```. One of ```"critical"```, ```"error"```,
```"warning"```, ```"info"```, ```"debug"```.)M<a name="letterM"></a>
        <a name="indexM"></a>

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_minimum_level](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#minimum_level) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(The minimum level of occurrences that will be reported to Rollbar.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_max_nesting_depth](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#max_nesting_depth) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Maximum depth for serialization of payloads. If set to ```-1```, there is no limit.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_max_items](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#max_items) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Maximum number of items sent in a single app request/response cycle. Currently there is no "unlimited" option,
set a high value for this number if you want to allow all occurrences to be sent. PHP network activity **will
block the main app thread** so the default limit is low for this setting.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_maxRetries](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#maxRetries) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(Sets the per-payload maximum number of retries sending to the Rollbar API. Currently supported in browser only.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_maxTelemetryEvents](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#maxTelemetryEvents) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(This determines the size of the in-memory queue of telemetry events that gets built up over the lifecycle of a
user interacting with your app. The size of the queue is fixed to be in the interval [0, 100], so while you can
lower the size of the queue from 100, currently you can not increase the size of the queue beyond 100.)O<a name="letterO"></a>
        <a name="indexO"></a>

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_overwriteScrubFields](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#overwriteScrubFields) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(If this is ```true``` then only the fields set in your configured ```scrubFields``` array will be used for
scrubbing. If this is ```false``` or not present, then the value set in ```scrubFields``` will be appended to
the default list of fields.)P<a name="letterP"></a>
        <a name="indexP"></a>

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_proxy](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#proxy) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Send data via a proxy server.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_payload](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#payload) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(Payload data.)R<a name="letterR"></a>
        <a name="indexR"></a>

- [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md) &mdash; <em>Class in namespace [CSoellinger\SilverStripeRollbar\Configuration](CSoellinger/SilverStripeRollbar/Configuration.md)(Rollbar configuration class. Values should be set inside yaml file.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_raise_on_error](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#raise_on_error) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(The SDK can be configured to raise exceptions passed to logging methods after reporting to Rollbar. Thanks to
this users can make the code below swallow exceptions in production, but throw them in test and dev environments:)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_report_suppressed](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#report_suppressed) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Sets whether errors suppressed with '@' should be reported or not)

- [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md) &mdash; <em>Class in namespace [CSoellinger\SilverStripeRollbar\Configuration](CSoellinger/SilverStripeRollbar/Configuration.md)(RollbarJS configuration class. Values should be set inside yaml file.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_reportLevel](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#reportLevel) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(Used to filter out which messages will get reported to Rollbar. If set to ```"error"```, only ```"error"``` or
higher severity level items will be sent to Rollbar.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_retryInterval](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#retryInterval) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(Number of milliseconds between retries. If set, errors will be queued up in the event of a connection failure
where we are unable to push the errors to Rollbar. Once a connection has been re-established, the queue will be
flushed. If null, then connection failure will not be detected and errors will not be queued.)

- [<abbr title="CSoellinger\SilverStripeRollbar\Log\RollbarLogHandler">RollbarLogHandler</abbr>](CSoellinger/SilverStripeRollbar/Log/RollbarLogHandler.md) &mdash; <em>Class in namespace [CSoellinger\SilverStripeRollbar\Log](CSoellinger/SilverStripeRollbar/Log.md)(The Rollbar log handler with our configuration. This class will be used for Silverstripe logging.)

- [<abbr title="CSoellinger\SilverStripeRollbar\Provider\RollbarJsTemplateProvider">RollbarJsTemplateProvider</abbr>](CSoellinger/SilverStripeRollbar/Provider/RollbarJsTemplateProvider.md) &mdash; <em>Class in namespace [CSoellinger\SilverStripeRollbar\Provider](CSoellinger/SilverStripeRollbar/Provider.md)(A SilverStripe template provider which can be used to get the RollbarJS init in your template(s).)

- [CSoellinger/SilverStripeRollbar/Provider/RollbarJsTemplateProvider.md#method_RollbarJS](<abbr title="CSoellinger\SilverStripeRollbar\Provider\RollbarJsTemplateProvider">RollbarJsTemplateProvider</abbr>::RollbarJS)() &mdash; <em>Method in class [<abbr title="CSoellinger\SilverStripeRollbar\Provider\RollbarJsTemplateProvider">RollbarJsTemplateProvider</abbr>](CSoellinger/SilverStripeRollbar/Provider/RollbarJsTemplateProvider.md)
(Return the RollbarJS init code as string.)S<a name="letterS"></a>
        <a name="indexS"></a>

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_scrub_fields](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#scrub_fields) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(An array of field names to scrub out of the entire payload excluding the top level ```access_token```. Values
will be replaced with asterisks. If overriding, make sure to list all fields you want to scrub, not just fields
you want to add to the default. Param names are converted to lowercase before comparing against the scrub list.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_scrub_safelist](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#scrub_safelist) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Array of fields that you do NOT want to be scrubbed even if they match entries in scrub_fields. Entries should be
provided in associative array dot notation, i.e. ```data.person.username```.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_send_message_trace](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#send_message_trace) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Should backtrace be include with string messages reported to Rollbar.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_scrubFields](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#scrubFields) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(A list containing names of keys/fields/query parameters to override the default scrubbing parameters. Scrubbed
fields will be normalized to all ```*``` before being reported to Rollbar. This is useful for sensitive
information that you do not want to send to Rollbar. e.g. User tokens.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_scrubPaths](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#scrubPaths) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(A list of exact paths to scrub in the payload. The scrub location is described using dot notation.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_scrubTelemetryInputs](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#scrubTelemetryInputs) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(This is used for scrubbing telemetry-specific data related to inputs in the dom. If this is set to ```true```
then no input values will be included in the telemetry events.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_sendConfig](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#sendConfig) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(Include the configuration for Rollbar with each item sent to Rollbar. This can aid in debugging configuration
issues.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_stackTraceLimit](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#stackTraceLimit) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(Node.js and some browsers, including Chrome and Safari, default to returning a maximum of 10 stack frames for any
thrown ```Error```. This option allows setting a larger maximum limit (e.g. 50).)T<a name="letterT"></a>
        <a name="indexT"></a>

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_timeout](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#timeout) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Request timeout for posting to rollbar, in seconds.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_transmit](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#transmit) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Should the SDK actually perform HTTP requests to Rollbar API. This is useful if you are trying to run Rollbar in
dry run mode for development or tests.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_timeout](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#timeout) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(Set the network timeout for Rollbar API requests in milliseconds. Currently supported in browser only.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_transmit](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#transmit) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(Determines whether to send Rollbar events to the Rollbar API. When unset, events will be fully processed, but not
sent.)U<a name="letterU"></a>
        <a name="indexU"></a>

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_use_error_reporting](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#use_error_reporting) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Sets whether to respect current ```error_reporting()``` level or not.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_uncaughtErrorLevel](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#uncaughtErrorLevel) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(The severity level used when uncaught errors are reported to Rollbar.)V<a name="letterV"></a>
        <a name="indexV"></a>

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#property_verbose](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>#verbose) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(This configuration option controls the verbosity of the internal logs of the SDK.)

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_verbose](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#verbose) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(This determines whether or not the client also logs to ```console.log```, in addition to sending the item to
Rollbar.)W<a name="letterW"></a>
        <a name="indexW"></a>

- $[CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#property_wrapGlobalEventHandlers](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>#wrapGlobalEventHandlers) &mdash; <em>Property in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(In the browser environment, Rollbar wraps many global event handlers in order to provide more detailed
information when an error occurs in one of these handlers. Set this flag false to disable these wrappers.)_<a name="letter_"></a>
        <a name="index_"></a>

- [CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md#method___toArray](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>::__toArray)() &mdash; <em>Method in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration">RollbarConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarConfiguration.md)
(Get all configs as an associative array.)

- [CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md#method___toArray](<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>::__toArray)() &mdash; <em>Method in class [<abbr title="CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration">RollbarJsConfiguration</abbr>](CSoellinger/SilverStripeRollbar/Configuration/RollbarJsConfiguration.md)
(Get all configs as an associative array.)

- [CSoellinger/SilverStripeRollbar/Factory/CheckIgnoreFunction.md#method___invoke](<abbr title="CSoellinger\SilverStripeRollbar\Factory\CheckIgnoreFunction">CheckIgnoreFunction</abbr>::__invoke)() &mdash; <em>Method in class [<abbr title="CSoellinger\SilverStripeRollbar\Factory\CheckIgnoreFunction">CheckIgnoreFunction</abbr>](CSoellinger/SilverStripeRollbar/Factory/CheckIgnoreFunction.md)
()

- [CSoellinger/SilverStripeRollbar/Factory/CustomDataFunction.md#method___invoke](<abbr title="CSoellinger\SilverStripeRollbar\Factory\CustomDataFunction">CustomDataFunction</abbr>::__invoke)() &mdash; <em>Method in class [<abbr title="CSoellinger\SilverStripeRollbar\Factory\CustomDataFunction">CustomDataFunction</abbr>](CSoellinger/SilverStripeRollbar/Factory/CustomDataFunction.md)
()

- [CSoellinger/SilverStripeRollbar/Log/RollbarLogHandler.md#method___construct](<abbr title="CSoellinger\SilverStripeRollbar\Log\RollbarLogHandler">RollbarLogHandler</abbr>::__construct)() &mdash; <em>Method in class [<abbr title="CSoellinger\SilverStripeRollbar\Log\RollbarLogHandler">RollbarLogHandler</abbr>](CSoellinger/SilverStripeRollbar/Log/RollbarLogHandler.md)
(Initialize the rollbar logger.)

_Generated by [Doctum, a API Documentation generator and fork of Sami](https://github.com/code-lts/doctum)._

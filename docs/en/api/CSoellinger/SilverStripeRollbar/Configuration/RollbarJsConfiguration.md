# CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration | SilverStripe Rollbar Module    

## [SilverStripe Rollbar Module](../../../index.md)

- [Classes](../../../classes.md)
- [Namespaces](../../../namespaces.md)
- [Interfaces](../../../interfaces.md)
- [Traits](../../../traits.md)
- [Index](../../../doc-index.md)
- [Search](../../../search.md)

>class

>    [CSoellinger](../../../CSoellinger.md)` / `[SilverStripeRollbar](../../../CSoellinger/SilverStripeRollbar.md)` / `[Configuration](../../../CSoellinger/SilverStripeRollbar/Configuration.md)` / `(RollbarJsConfiguration)
## RollbarJsConfiguration

class **RollbarJsConfiguration**


RollbarJS configuration class. Values should be set inside yaml file.
### Traits


- <abbr title="SilverStripe\Core\Injector\Injectable">Injectable</abbr>
- <abbr title="SilverStripe\Core\Config\Configurable">Configurable</abbr>



### Properties

|   |   |   |   |
|---|---|---|---|
|<a name="property_accessToken"></a>static&nbsp;private&nbsp;string|$accessToken|Sets the access token used to send payloads to Rollbar.||
|<a name="property_addErrorContext"></a>static&nbsp;private&nbsp;bool|$addErrorContext|Enables adding error context to the payload. For exception payloads, the error context will be read from ```error.rollbarContext```.||
|<a name="property_autoInstrument"></a>static&nbsp;private&nbsp;<abbr title="CSoellinger\SilverStripeRollbar\Configuration\array&lt;string,mixed&gt;">array&lt;string,mixed&gt;</abbr>|$autoInstrument|An object or boolean describing what events to automatically collect. If this value is false then we collect nothing, if it is true we collect everything, otherwise we do not collect events for the keys with a false value.||
|<a name="property_captureIp"></a>static&nbsp;private&nbsp;bool|$captureIp|For browser settings, this determines how we attempt to capture IP addresses from the client that submits items.||
|<a name="property_captureUsername"></a>static&nbsp;private&nbsp;bool|$captureUsername|Track user&#039;s username. Pursuant to General Data Protection Regulation (GDPR) (EU) 2016/679 this option is set to ```false``` by default. If you want to capture your users&#039; username, make sure you have their consent as required by the regulation.||
|<a name="property_captureEmail"></a>static&nbsp;private&nbsp;bool|$captureEmail|Track user&#039;s email address. Pursuant to General Data Protection Regulation (GDPR) (EU) 2016/679 this option is set to ```false``` by default. If you want to capture your users&#039; email addresses, make sure you have their consent as required by the regulation.||
|<a name="property_captureUncaught"></a>static&nbsp;private&nbsp;bool|$captureUncaught|This determines whether or not the client reports all uncaught exceptions to Rollbar by default.||
|<a name="property_captureUnhandledRejections"></a>static&nbsp;private&nbsp;bool|$captureUnhandledRejections|This determines whether or not the client reports all uncaught rejections to Rollbar by default.||
|<a name="property_enabled"></a>static&nbsp;private&nbsp;bool|$enabled|If set to ```false```, no data will be sent to Rollbar for this notifier.||
|<a name="property_endpoint"></a>static&nbsp;private&nbsp;string|$endpoint|The url to which items get POSTed. This is mostly relevant to our enterprise customers. You will, however, need this if you&#039;re proxying the requests through your own server, or you&#039;re an enterprise customer.||
|<a name="property_hostBlockList"></a>static&nbsp;private&nbsp;string[]|$hostBlockList|Check payload frames for blocklisted URL patterns. This is an array of strings, each of which get compiled to a ```RegExp```. If a file in the trace matches one of these URL patterns, the payload is ignored.||
|<a name="property_hostSafeList"></a>static&nbsp;private&nbsp;string[]|$hostSafeList|Check payload frames for safelisted URL patterns. This is an array of strings, each of which get compiled to a ```RegExp```. If a file in the trace matches one of these URL patterns, the payload is accepted. When you specify a domain, that will safelist all subdomains of that domain.||
|<a name="property_ignoreDuplicateErrors"></a>static&nbsp;private&nbsp;bool|$ignoreDuplicateErrors|When false, transmit all error events including consecutive duplicate errors. When true, only send the first error when identical consecutive errors are detected.||
|<a name="property_includeItemsInTelemetry"></a>static&nbsp;private&nbsp;bool|$includeItemsInTelemetry|This option determines if the client includes previously logged items to Rollbar in the queue of telemetry events. This includes both direct calls and indirect calls via uncaught exceptions.||
|<a name="property_logLevel"></a>static&nbsp;private&nbsp;string|$logLevel|The severity level used for calls to ```Rollbar.log()```. One of ```&quot;critical&quot;```, ```&quot;error&quot;```, ```&quot;warning&quot;```, ```&quot;info&quot;```, ```&quot;debug&quot;```.||
|<a name="property_maxRetries"></a>static&nbsp;private&nbsp;null\|int|$maxRetries|Sets the per-payload maximum number of retries sending to the Rollbar API. Currently supported in browser only.||
|<a name="property_maxTelemetryEvents"></a>static&nbsp;private&nbsp;int|$maxTelemetryEvents|This determines the size of the in-memory queue of telemetry events that gets built up over the lifecycle of a user interacting with your app. The size of the queue is fixed to be in the interval [0, 100], so while you can lower the size of the queue from 100, currently you can not increase the size of the queue beyond 100.||
|<a name="property_overwriteScrubFields"></a>static&nbsp;private&nbsp;bool|$overwriteScrubFields|If this is ```true``` then only the fields set in your configured ```scrubFields``` array will be used for scrubbing. If this is ```false``` or not present, then the value set in ```scrubFields``` will be appended to the default list of fields.||
|<a name="property_reportLevel"></a>static&nbsp;private&nbsp;string|$reportLevel|Used to filter out which messages will get reported to Rollbar. If set to ```&quot;error&quot;```, only ```&quot;error&quot;``` or higher severity level items will be sent to Rollbar.||
|<a name="property_retryInterval"></a>static&nbsp;private&nbsp;null\|int|$retryInterval|Number of milliseconds between retries. If set, errors will be queued up in the event of a connection failure where we are unable to push the errors to Rollbar. Once a connection has been re-established, the queue will be flushed. If null, then connection failure will not be detected and errors will not be queued.||
|<a name="property_scrubFields"></a>static&nbsp;private&nbsp;string[]|$scrubFields|A list containing names of keys/fields/query parameters to override the default scrubbing parameters. Scrubbed fields will be normalized to all ```*``` before being reported to Rollbar. This is useful for sensitive information that you do not want to send to Rollbar. e.g. User tokens.||
|<a name="property_scrubPaths"></a>static&nbsp;private&nbsp;null\|string[]|$scrubPaths|A list of exact paths to scrub in the payload. The scrub location is described using dot notation.||
|<a name="property_scrubTelemetryInputs"></a>static&nbsp;private&nbsp;bool|$scrubTelemetryInputs|This is used for scrubbing telemetry-specific data related to inputs in the dom. If this is set to ```true``` then no input values will be included in the telemetry events.||
|<a name="property_sendConfig"></a>static&nbsp;private&nbsp;bool|$sendConfig|Include the configuration for Rollbar with each item sent to Rollbar. This can aid in debugging configuration issues.||
|<a name="property_stackTraceLimit"></a>static&nbsp;private&nbsp;null\|int|$stackTraceLimit|Node.js and some browsers, including Chrome and Safari, default to returning a maximum of 10 stack frames for any thrown ```Error```. This option allows setting a larger maximum limit (e.g. 50).||
|<a name="property_timeout"></a>static&nbsp;private&nbsp;null\|int|$timeout|Set the network timeout for Rollbar API requests in milliseconds. Currently supported in browser only.||
|<a name="property_transmit"></a>static&nbsp;private&nbsp;bool|$transmit|Determines whether to send Rollbar events to the Rollbar API. When unset, events will be fully processed, but not sent.||
|<a name="property_uncaughtErrorLevel"></a>static&nbsp;private&nbsp;string|$uncaughtErrorLevel|The severity level used when uncaught errors are reported to Rollbar.||
|<a name="property_verbose"></a>static&nbsp;private&nbsp;bool|$verbose|This determines whether or not the client also logs to ```console.log```, in addition to sending the item to Rollbar.||
|<a name="property_wrapGlobalEventHandlers"></a>static&nbsp;private&nbsp;bool|$wrapGlobalEventHandlers|In the browser environment, Rollbar wraps many global event handlers in order to provide more detailed information when an error occurs in one of these handlers. Set this flag false to disable these wrappers.||
|<a name="property_payload"></a>static&nbsp;private&nbsp;<abbr title="CSoellinger\SilverStripeRollbar\Configuration\array&lt;string,mixed&gt;">array&lt;string,mixed&gt;</abbr>|$payload|Payload data.||
### Methods

|   |   |   |   |
|---|---|---|---|
|static&nbsp;<abbr title="CSoellinger\SilverStripeRollbar\Configuration\array&lt;string,mixed&gt;">array&lt;string,mixed&gt;</abbr>|<a name="#method___toArray"></a>__toArray()|Get all configs as an associative array.||
|static&nbsp;<abbr title="CSoellinger\SilverStripeRollbar\Configuration\array&lt;string,mixed&gt;">array&lt;string,mixed&gt;</abbr>|<a name="#method_getConfigArray"></a>getConfigArray()|Get rollbar ready config with pre filled values like environment, host, root and person(_fn).||
|static&nbsp;null\|<abbr title="CSoellinger\SilverStripeRollbar\Configuration\array&lt;string,int">array&lt;string,int</abbr>\|<abbr title="CSoellinger\SilverStripeRollbar\Configuration\string&gt;">string&gt;</abbr>|<a name="#method_getPerson"></a>getPerson()|Get person data from SilverStripe member if config ```captureUsername``` and/or ```captureEmail``` is set to. true.||


### Details
<a name id="method___toArray"></a>

### 
static <abbr title="CSoellinger\SilverStripeRollbar\Configuration\array&lt;string,mixed&gt;">array&lt;string,mixed&gt;</abbr> **__toArray**()

at line 431

Get all configs as an associative array.        

#### Return Value

|   |   |
|---|---|
|<abbr title="CSoellinger\SilverStripeRollbar\Configuration\array&lt;string,mixed&gt;">array&lt;string,mixed&gt;</abbr>|

<a name id="method_getConfigArray"></a>

### 
static <abbr title="CSoellinger\SilverStripeRollbar\Configuration\array&lt;string,mixed&gt;">array&lt;string,mixed&gt;</abbr> **getConfigArray**()

at line 453

Get rollbar ready config with pre filled values like environment, host, root and person(_fn).        

#### Return Value

|   |   |
|---|---|
|<abbr title="CSoellinger\SilverStripeRollbar\Configuration\array&lt;string,mixed&gt;">array&lt;string,mixed&gt;</abbr>|

<a name id="method_getPerson"></a>

### 
staticprivate null\|<abbr title="CSoellinger\SilverStripeRollbar\Configuration\array&lt;string,int">array&lt;string,int</abbr>\|<abbr title="CSoellinger\SilverStripeRollbar\Configuration\string&gt;">string&gt;</abbr> **getPerson**()

at line 486

Get person data from SilverStripe member if config ```captureUsername``` and/or ```captureEmail``` is set to
true.        

#### Return Value

|   |   |
|---|---|
|null\|<abbr title="CSoellinger\SilverStripeRollbar\Configuration\array&lt;string,int">array&lt;string,int</abbr>\|<abbr title="CSoellinger\SilverStripeRollbar\Configuration\string&gt;">string&gt;</abbr>|

_Generated by [Doctum, a API Documentation generator and fork of Sami](https://github.com/code-lts/doctum)._
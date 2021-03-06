# CSoellinger\SilverStripeRollbar\Factory\CustomDataFunction | SilverStripe Rollbar Module    

## [SilverStripe Rollbar Module](../../../index.md)

- [Classes](../../../classes.md)
- [Namespaces](../../../namespaces.md)
- [Interfaces](../../../interfaces.md)
- [Traits](../../../traits.md)
- [Index](../../../doc-index.md)
- [Search](../../../search.md)

>interface

>    [CSoellinger](../../../CSoellinger.md)` / `[SilverStripeRollbar](../../../CSoellinger/SilverStripeRollbar.md)` / `[Factory](../../../CSoellinger/SilverStripeRollbar/Factory.md)` / `(CustomDataFunction)
## CustomDataFunction

interface **CustomDataFunction**


Allows creating dynamic custom data on runtime during error reporting. The callable taking two parameters $toLog
(the context of what's being logged) and ```$context``` (additional context data provided in the config). You
provide ```$context``` by adding ```custom_data_method_context``` key to the ```$extra``` or ```$context```
parameters ```Rollbar::log``` or ```RollbarLogger::log```. You can see a full example of the application here:
https://github.com/rollbar/rollbar-php-examples/tree/master/custom-data-method


### Methods

|   |   |   |   |
|---|---|---|---|
|<abbr title="CSoellinger\SilverStripeRollbar\Factory\array&lt;string,mixed&gt;">array&lt;string,mixed&gt;</abbr>|<a name="#method___invoke"></a>__invoke(mixed $toLog, array $context)|No description||


### Details
<a name id="method___invoke"></a>

### 
 <abbr title="CSoellinger\SilverStripeRollbar\Factory\array&lt;string,mixed&gt;">array&lt;string,mixed&gt;</abbr> **__invoke**(mixed $toLog, array $context)

at line 20



#### Parameters

|   |   |   |
|---|---|---|
|mixed|$toLog|The context of what's being logged|array|$context|Additional context data provided in the config

#### Return Value

|   |   |
|---|---|
|<abbr title="CSoellinger\SilverStripeRollbar\Factory\array&lt;string,mixed&gt;">array&lt;string,mixed&gt;</abbr>|

_Generated by [Doctum, a API Documentation generator and fork of Sami](https://github.com/code-lts/doctum)._
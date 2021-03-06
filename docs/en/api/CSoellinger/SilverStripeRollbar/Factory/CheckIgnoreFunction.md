# CSoellinger\SilverStripeRollbar\Factory\CheckIgnoreFunction | SilverStripe Rollbar Module    

## [SilverStripe Rollbar Module](../../../index.md)

- [Classes](../../../classes.md)
- [Namespaces](../../../namespaces.md)
- [Interfaces](../../../interfaces.md)
- [Traits](../../../traits.md)
- [Index](../../../doc-index.md)
- [Search](../../../search.md)

>interface

>    [CSoellinger](../../../CSoellinger.md)` / `[SilverStripeRollbar](../../../CSoellinger/SilverStripeRollbar.md)` / `[Factory](../../../CSoellinger/SilverStripeRollbar/Factory.md)` / `(CheckIgnoreFunction)
## CheckIgnoreFunction

interface **CheckIgnoreFunction**


Function called before sending payload to Rollbar, return true to stop the error from being sent to Rollbar.


### Methods

|   |   |   |   |
|---|---|---|---|
|void|<a name="#method___invoke"></a>__invoke(bool $isUncaught, mixed $toLog, array $payload)|No description||


### Details
<a name id="method___invoke"></a>

### 
 void **__invoke**(bool $isUncaught, mixed $toLog, array $payload)

at line 18



#### Parameters

|   |   |   |
|---|---|---|
|bool|$isUncaught|boolean value set to true if the error was an uncaught exception.|mixed|$toLog|a RollbarException instance that will allow you to get the message
or exception; or a string if you're logging a simple message|array|$payload|an array containing the payload as it will be sent to Rollbar.
Payload schema can be found at
https://rollbar.com/docs/api/items_post/

#### Return Value

|   |   |
|---|---|
|void|

_Generated by [Doctum, a API Documentation generator and fork of Sami](https://github.com/code-lts/doctum)._
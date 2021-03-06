# CSoellinger\SilverStripeRollbar\Factory | SilverStripe Rollbar Module    

## [SilverStripe Rollbar Module](../../index.md)

- [Classes](../../classes.md)
- [Namespaces](../../namespaces.md)
- [Interfaces](../../interfaces.md)
- [Traits](../../traits.md)
- [Index](../../doc-index.md)
- [Search](../../search.md)

> Namespace /     [CSoellinger](../../CSoellinger.md)` / `[SilverStripeRollbar](../../CSoellinger/SilverStripeRollbar.md)` / `[Factory](../../CSoellinger/SilverStripeRollbar/Factory.md)` / `

## CSoellinger\SilverStripeRollbar\Factory




### Interfaces

- [<abbr title="CSoellinger\SilverStripeRollbar\Factory\CheckIgnoreFunction">CheckIgnoreFunction</abbr>](../../CSoellinger/SilverStripeRollbar/Factory/CheckIgnoreFunction.md) (Function called before sending payload to Rollbar, return true to stop the error from being sent to Rollbar.)
- [<abbr title="CSoellinger\SilverStripeRollbar\Factory\CustomDataFunction">CustomDataFunction</abbr>](../../CSoellinger/SilverStripeRollbar/Factory/CustomDataFunction.md) (Allows creating dynamic custom data on runtime during error reporting. The callable taking two parameters $toLog
(the context of what&#039;s being logged) and ```$context``` (additional context data provided in the config). You
provide ```$context``` by adding ```custom_data_method_context``` key to the ```$extra``` or ```$context```
parameters ```Rollbar::log``` or ```RollbarLogger::log```. You can see a full example of the application here:
https://github.com/rollbar/rollbar-php-examples/tree/master/custom-data-method)


_Generated by [Doctum, a API Documentation generator and fork of Sami](https://github.com/code-lts/doctum)._
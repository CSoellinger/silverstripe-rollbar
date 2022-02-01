<?php

namespace CSoellinger\SilverStripeRollbar\Factory;

/**
 * Allows creating dynamic custom data on runtime during error reporting. The callable taking two parameters $toLog
 * (the context of what's being logged) and ```$context``` (additional context data provided in the config). You
 * provide ```$context``` by adding ```custom_data_method_context``` key to the ```$extra``` or ```$context```
 * parameters ```Rollbar::log``` or ```RollbarLogger::log```. You can see a full example of the application here:
 * https://github.com/rollbar/rollbar-php-examples/tree/master/custom-data-method
 */
interface CustomDataFunction
{
    /**
     * @param mixed               $toLog      The context of what's being logged
     * @param array<string,mixed> $context    Additional context data provided in the config
     *
     * @return array<string,mixed>
     */
    public function __invoke(mixed $toLog, array $context);
}

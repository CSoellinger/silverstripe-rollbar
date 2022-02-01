<?php

namespace CSoellinger\SilverStripeRollbar\Factory;

/**
 * Function called before sending payload to Rollbar, return true to stop the error from being sent to Rollbar.
 */
interface CheckIgnoreFunction
{
    /**
     * @param bool                  $isUncaught     boolean value set to true if the error was an uncaught exception.
     * @param mixed                 $toLog          a RollbarException instance that will allow you to get the message
     *                                              or exception; or a string if you're logging a simple message
     * @param array<string,mixed>   $payload        an array containing the payload as it will be sent to Rollbar.
     *                                              Payload schema can be found at
     *                                              https://rollbar.com/docs/api/items_post/
     */
    public function __invoke(bool $isUncaught, mixed $toLog, array $payload): void;
}

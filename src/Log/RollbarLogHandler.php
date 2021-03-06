<?php

namespace CSoellinger\SilverStripeRollbar\Log;

use CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration;
use Monolog\Handler\PsrHandler;
use Rollbar\Rollbar;

/**
 * The Rollbar log handler with our configuration. This class will be used for Silverstripe logging.
 */
class RollbarLogHandler extends PsrHandler
{
    /**
     * Initialize the rollbar logger.
     *
     * @uses RollbarConfiguration::config       Get the rollbar config
     * @uses RollbarConfiguration::configArray  Get the whole rollbar config
     * @uses Rollbar:init                       Initialize rollbar with our config
     * @uses Rollbar:logger                     Initialize the rollbar logger
     */
    public function __construct()
    {
        $rollbarConfig = RollbarConfiguration::config();

        Rollbar::init(
            RollbarConfiguration::getConfigArray(),
            $rollbarConfig->get('handleException'),
            $rollbarConfig->get('handleError'),
            $rollbarConfig->get('handleFatal')
        );

        parent::__construct(Rollbar::logger());
    }
}

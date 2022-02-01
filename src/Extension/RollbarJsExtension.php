<?php

namespace CSoellinger\SilverStripeRollbar\Extension;

use CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration;
use Rollbar\RollbarJsHelper;
use SilverStripe\Core\Extension;
use SilverStripe\View\Requirements;

/**
 * Rollbar JS extension which can be used e.g. for controllers to add the necessary JS code before controller init.
 */
class RollbarJsExtension extends Extension
{
    /**
     * Function will be called right before Controller::init.
     */
    public function onBeforeInit(): void
    {
        $rollbarJsConfig = RollbarJsConfiguration::getConfigArray();
        $rollbarJs = RollbarJsHelper::buildJs((array) $rollbarJsConfig); /** @phpstan-ignore-line */

        Requirements::insertHeadTags($rollbarJs);
    }
}

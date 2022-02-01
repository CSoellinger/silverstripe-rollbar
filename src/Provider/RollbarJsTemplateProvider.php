<?php

namespace CSoellinger\SilverStripeRollbar\Provider;

use CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration;
use Rollbar\RollbarJsHelper;
use SilverStripe\View\TemplateGlobalProvider;

/**
 * A SilverStripe template provider which can be used to get the RollbarJS init in your template(s).
 *
 * @example Template <head>{RollbarJS}</head>
 */
class RollbarJsTemplateProvider implements TemplateGlobalProvider
{
    /**
     * Get the available global variables provided by our template provider.
     *
     * @return array<string,array<string,string>> Global template variables
     */
    public static function get_template_global_variables()
    {
        return [
            'RollbarJS' => [
                'method' => 'RollbarJS',
                'casting' => 'HTMLText',
            ],
        ];
    }

    /**
     * Return the RollbarJS init code as string.
     *
     * @return string
     */
    public static function RollbarJS()
    {
        return RollbarJsHelper::buildJs((array) RollbarJsConfiguration::getConfigArray()); /** @phpstan-ignore-line */
    }
}

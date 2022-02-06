<?php

namespace CSoellinger\SilverStripeRollbar\Tests\Provider;

use CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration;
use CSoellinger\SilverStripeRollbar\Provider\RollbarJsTemplateProvider;
use SilverStripe\Control\CliController;
use SilverStripe\Control\Controller;
use SilverStripe\Core\Config\Config;
use SilverStripe\Dev\SapphireTest;
use SilverStripe\View\SSViewer;

/**
 * @covers \CSoellinger\SilverStripeRollbar\Provider\RollbarJsTemplateProvider
 *
 * @internal
 */
class RollbarJsTemplateProviderTest extends SapphireTest
{
    public function setUp(): void
    {
        parent::setUp();

        Config::modify()->set(RollbarJsConfiguration::class, 'accessToken', 'ad865e76e7fb496fab096ac07b1dbabb');
    }

    /**
     * Undocumented function.
     *
     * @covers \CSoellinger\SilverStripeRollbar\Provider\RollbarJsTemplateProvider::get_template_global_variables
     */
    public function testGetTemplateGlobalVariables(): void
    {
        $expect = [
            'RollbarJS' => [
                'method' => 'RollbarJS',
                'casting' => 'HTMLText',
            ],
        ];

        self::assertEquals($expect, RollbarJsTemplateProvider::get_template_global_variables());
    }

    /**
     * Undocumented function.
     *
     * @covers \CSoellinger\SilverStripeRollbar\Provider\RollbarJsTemplateProvider::RollbarJS
     */
    public function testRollbarJS(): void
    {
        $expect = "\n" . trim(file_get_contents(implode(DIRECTORY_SEPARATOR, [__DIR__, '..', 'rollbarjs-script.txt'])));

        self::assertEquals($expect, RollbarJsTemplateProvider::RollbarJS());
    }
}

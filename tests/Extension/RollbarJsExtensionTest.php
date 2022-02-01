<?php

namespace CSoellinger\SilverStripeRollbar\Tests\Extension;

use CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration;
use CSoellinger\SilverStripeRollbar\Extension\RollbarJsExtension;
use SilverStripe\Core\Config\Config;
use SilverStripe\Dev\SapphireTest;

/**
 * @covers \CSoellinger\SilverStripeRollbar\Extension\RollbarJsExtension
 *
 * @internal
 */
class RollbarJsExtensionTest extends SapphireTest
{
    public function setUp(): void
    {
        parent::setUp();

        Config::modify()->set(RollbarJsConfiguration::class, 'accessToken', 'abcdefghijklmnopqrstuvwxyz012345');
    }

    /**
     * Undocumented function.
     *
     * @covers \CSoellinger\SilverStripeRollbar\Extension\RollbarJsExtension::onBeforeInit
     */
    public function testInsertHeadTag(): void
    {
        $handler = new RollbarJsExtension();
        $handler->onBeforeInit();

        self::assertInstanceOf(RollbarJsExtension::class, $handler);
    }
}

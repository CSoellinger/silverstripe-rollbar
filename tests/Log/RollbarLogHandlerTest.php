<?php

namespace CSoellinger\SilverStripeRollbar\Tests\Log;

use CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration;
use CSoellinger\SilverStripeRollbar\Log\RollbarLogHandler;
use Monolog\Logger;
use Psr\Log\LoggerInterface;
use SilverStripe\Core\Config\Config;
use SilverStripe\Core\Injector\Injector;
use SilverStripe\Dev\SapphireTest;

/**
 * @covers \CSoellinger\SilverStripeRollbar\Log\RollbarLogHandler
 *
 * @internal
 */
class RollbarLogHandlerTest extends SapphireTest
{
    public function setUp(): void
    {
        parent::setUp();

        Config::modify()->set(RollbarConfiguration::class, 'access_token', 'ad865e76e7fb496fab096ac07b1dbabb');
    }

    /**
     * Undocumented function.
     *
     * @covers \CSoellinger\SilverStripeRollbar\Log\RollbarLogHandler::__construct
     */
    public function testInitializeLogHandler(): void
    {
        $handler = new RollbarLogHandler();
        $handler->setBubble(false);

        self::assertInstanceOf(RollbarLogHandler::class, $handler);

        /** @var Logger */
        $logger = Injector::inst()->get(LoggerInterface::class);
        $logger->pushHandler($handler);

        self::assertInstanceOf(RollbarLogHandler::class, $logger->getHandlers()[0]);
        self::assertEquals('error-log', $logger->getName());

        $record = ['level' => 100, 'level_name' => 'DEBUG', 'message' => 'test', 'context' => []];

        self::assertTrue($logger->getHandlers()[0]->handle($record));
    }
}

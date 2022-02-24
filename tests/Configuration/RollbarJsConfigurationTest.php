<?php

namespace CSoellinger\SilverStripeRollbar\Tests\Configuration;

use CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration;
use Exception;
use ReflectionClass;
use ReflectionMethod;
use SilverStripe\Core\Config\Config;
use SilverStripe\Dev\SapphireTest;
use SilverStripe\Security\Member;

/**
 * @covers \CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration
 *
 * @internal
 */
class RollbarJsConfigurationTest extends SapphireTest
{
    /**
     * {@inheritDoc}
     *
     * @var mixed
     */
    protected $usesDatabase = false;

    /**
     * Default test config.
     *
     * @var array<string,mixed>
     */
    private $defaultConfig = [
        'accessToken' => '123',
        'addErrorContext' => false,
        'autoInstrument' => [
            'network' => true,
            'log' => true,
            'dom' => true,
            'navigation' => true,
            'connectivity' => true,
        ],
        'captureIp' => true,
        'captureUsername' => false,
        'captureEmail' => false,
        'captureUncaught' => false,
        'captureUnhandledRejections' => false,
        'enabled' => true,
        'endpoint' => 'https://api.rollbar.com/api/1/item',
        'hostBlockList' => null,
        'hostSafeList' => null,
        'ignoreDuplicateErrors' => true,
        'includeItemsInTelemetry' => true,
        'logLevel' => 'debug',
        'maxRetries' => null,
        'maxTelemetryEvents' => 100,
        'overwriteScrubFields' => false,
        'reportLevel' => 'debug',
        'retryInterval' => null,
        'scrubFields' => [
            'pw',
            'pass',
            'passwd',
            'password',
            'secret',
            'confirm_password',
            'confirmPassword',
            'password_confirmation',
            'passwordConfirmation',
            'access_token',
            'accessToken',
            'secret_key',
            'secretKey',
            'secretToken',
            'cc-number',
            'card number',
            'cardnumber',
            'cardnum',
            'ccnum',
            'ccnumber',
            'cc num',
            'creditcardnumber',
            'credit card number',
            'newcreditcardnumber',
            'new credit card',
            'creditcardno',
            'credit card no',
            'card#',
            'card #',
            'cc-csc',
            'cvc2',
            'cvv2',
            'ccv2',
            'security code',
            'card verification',
            'name on credit card',
            'name on card',
            'nameoncard',
            'cardholder',
            'card holder',
            'name des karteninhabers',
            'card type',
            'cardtype',
            'cc type',
            'cctype',
            'payment type',
            'expiration date',
            'expirationdate',
            'expdate',
            'cc-exp',
        ],
        'scrubPaths' => null,
        'scrubTelemetryInputs' => false,
        'sendConfig' => false,
        'stackTraceLimit' => null,
        'timeout' => null,
        'transmit' => true,
        'uncaughtErrorLevel' => 'error',
        'verbose' => false,
        'wrapGlobalEventHandlers' => true,
        'payload' => [
            'client' => [
                'javascript' => [
                    'code_version' => null,
                    'source_map_enabled' => false,
                    'guess_uncaught_frames' => false,
                ],
            ],
            'server' => [
                'branch' => 'master',
                'root' => null,
            ],
        ],
    ];

    public function setUp(): void
    {
        parent::setUp();

        Config::modify()->set(RollbarJsConfiguration::class, 'accessToken', '123');
    }

    /**
     * Undocumented function.
     *
     * @covers \CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration::__toArray
     */
    public function testDefaultConfigToArray(): void
    {
        self::assertEquals($this->defaultConfig, RollbarJsConfiguration::__toArray());
    }

    /**
     * Undocumented function.
     *
     * @covers \CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration::getPerson
     */
    public function testGetPersonGuest(): void
    {
        $getPerson = self::getMethod('getPerson');
        self::assertNull($getPerson->invoke(null));

        $this->logInAs(Member::get_by_id(1));
        RollbarJsConfiguration::config()->set('captureUsername', true);

        $expect = ['id' => 1, 'username' => 'Default Admin'];
        self::assertEquals($expect, $getPerson->invoke(null));

        RollbarJsConfiguration::config()->set('captureEmail', true);
        $expect = ['id' => 1, 'username' => 'Default Admin', 'email' => 'admin'];
        self::assertEquals($expect, $getPerson->invoke(null));
    }

    /**
     * Undocumented function.
     *
     * @covers \CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration::getConfigArray
     */
    public function testDefaultConfigGetConfigArray(): void
    {
        $expect = $this->defaultConfig;
        $expect['payload'] = array_merge((array) $expect['payload'], [
            'environment' => 'dev',
            'context' => '',
            'person' => null,
            'sessionId' => null,
        ]);

        self::assertEquals($expect, RollbarJsConfiguration::getConfigArray());
    }

    /**
     * Undocumented function.
     *
     * @covers \CSoellinger\SilverStripeRollbar\Configuration\RollbarJsConfiguration::getConfigArray
     *
     * @throws Exception
     */
    public function testDefaultConfigGetConfigArrayFailure(): void
    {
        $this->expectException(Exception::class);

        RollbarJsConfiguration::config()->set('accessToken', '');
        RollbarJsConfiguration::getConfigArray();
    }

    /**
     * Undocumented function.
     *
     * @param string $name Method name
     */
    protected static function getMethod($name): ReflectionMethod
    {
        $class = new ReflectionClass(RollbarJsConfiguration::class);
        $method = $class->getMethod($name);
        $method->setAccessible(true);

        return $method;
    }
}

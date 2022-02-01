<?php

namespace CSoellinger\SilverStripeRollbar\Tests\Configuration;

use CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration;
use Exception;
use SilverStripe\Core\Config\Config;
use SilverStripe\Dev\SapphireTest;
use SilverStripe\Security\Member;

/**
 * @covers \CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration
 *
 * @internal
 */
class RollbarConfigurationTest extends SapphireTest
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
        'access_token' => '123',
        'agent_log_location' => '/var/www',
        'allow_exec' => true,
        'autodetect_branch' => false,
        'branch' => null,
        'capture_email' => false,
        'capture_ip' => true,
        'capture_username' => false,
        'capture_error_stacktraces' => true,
        'check_ignore' => null,
        'code_version' => '',
        'custom' => [],
        'custom_data_method' => null,
        'custom_truncation' => null,
        'ca_cert_path' => null,
        'enabled' => true,
        'endpoint' => 'https://api.rollbar.com/api/1/',
        'error_sample_rates' => [],
        'exception_sample_rates' => [],
        'fluent_host' => '127.0.0.1',
        'fluent_port' => 24224,
        'fluent_tag' => 'rollbar',
        'handler' => 'blocking',
        'included_errno' => 4375,
        'include_error_code_context' => false,
        'include_exception_code_context' => false,
        'include_raw_request_body' => false,
        'local_vars_dump' => true,
        'log_payload' => false,
        'minimum_level' => 0,
        'proxy' => null,
        'raise_on_error' => false,
        'report_suppressed' => false,
        'scrub_fields' => [
            'passwd',
            'password',
            'secret',
            'confirm_password',
            'password_confirmation',
            'auth_token',
            'csrf_token',
        ],
        'scrub_whitelist' => [],
        'timeout' => 3,
        'transmit' => true,
        'use_error_reporting' => false,
        'send_message_trace' => false,
        'verbose' => 'none',
        'max_nesting_depth' => -1,
        'max_items' => 10,
        'handleException' => true,
        'handleError' => true,
        'handleFatal' => true,
    ];

    public function setUp(): void
    {
        parent::setUp();

        Config::modify()->set(RollbarConfiguration::class, 'access_token', '123');
    }

    /**
     * Undocumented function.
     *
     * @covers \CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration::__toArray
     */
    public function testDefaultConfigToArray(): void
    {
        self::assertEquals($this->defaultConfig, RollbarConfiguration::__toArray());
    }

    /**
     * Undocumented function.
     *
     * @covers \CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration::getPerson
     */
    public function testGetPersonGuest(): void
    {
        self::assertNull(RollbarConfiguration::getPerson());

        $this->logInAs(Member::get_by_id(1));
        RollbarConfiguration::config()->set('capture_username', true);

        $expect = ['id' => 1, 'username' => 'Default Admin'];
        self::assertEquals($expect, RollbarConfiguration::getPerson());

        RollbarConfiguration::config()->set('capture_email', true);
        $expect = ['id' => 1, 'username' => 'Default Admin', 'email' => 'admin'];
        self::assertEquals($expect, RollbarConfiguration::getPerson());
    }

    /**
     * Undocumented function.
     *
     * @covers \CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration::getConfigArray
     */
    public function testDefaultConfigGetConfigArray(): void
    {
        $expect = $this->defaultConfig;
        $expect['environment'] = 'dev';
        $expect['host'] = 'dev';
        $expect['root'] = realpath(implode(DIRECTORY_SEPARATOR, [__DIR__, '..', '..']));
        $expect['person_fn'] = 'CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration::getPerson';

        self::assertEquals($expect, RollbarConfiguration::getConfigArray());
    }

    /**
     * Undocumented function.
     *
     * @covers \CSoellinger\SilverStripeRollbar\Configuration\RollbarConfiguration::getConfigArray
     *
     * @throws Exception
     */
    public function testDefaultConfigGetConfigArrayFailure(): void
    {
        RollbarConfiguration::config()->set('access_token', '');

        try {
            RollbarConfiguration::getConfigArray();
        } catch (\Throwable $th) {
            self::throwException($th);
        }
    }
}

<?php

namespace Boatrace\Ninja\Tests;

use Boatrace\Ninja\MainPurchaser;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * @author shimomo
 */
class MainPurchaserTest extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Ninja\MainPurchaser
     */
    protected $purchaser;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->purchaser = new MainPurchaser;
    }

    /**
     * @doesNotPerformAssertions
     * @return void
     */
    public function testPurchaser(): void
    {
        $this->purchaser
            ->setDepositAmount(10000)
            ->setSubscriberNumber(getenv('SUBSCRIBER_NUMBER'))
            ->setPersonalIdentificationNumber(getenv('PERSONAL_IDENTIFICATION_NUMBER'))
            ->setAuthenticationPassword(getenv('AUTHENTICATION_PASSWORD'))
            ->setPurchasePassword(getenv('PURCHASE_PASSWORD'))
            ->setPurchaseUnitAmount(2000)
            ->purchase(24, 12, 3, [12, 13, 14, 15, 16]);
    }
}

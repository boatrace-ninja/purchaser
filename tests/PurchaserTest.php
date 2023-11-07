<?php

namespace Boatrace\Ninja\Tests;

use Boatrace\Ninja\Purchaser;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * @author shimomo
 */
class PurchaserTest extends PHPUnitTestCase
{
    /**
     * @doesNotPerformAssertions
     * @return void
     */
    public function testPurchaser(): void
    {
        Purchaser::setDepositAmount(10000)
            ->setSubscriberNumber(getenv('SUBSCRIBER_NUMBER'))
            ->setPersonalIdentificationNumber(getenv('PERSONAL_IDENTIFICATION_NUMBER'))
            ->setAuthenticationPassword(getenv('AUTHENTICATION_PASSWORD'))
            ->setPurchasePassword(getenv('PURCHASE_PASSWORD'))
            ->setPurchaseUnitAmount(2000)
            ->purchase(24, 12, 3, [12, 13, 14, 15, 16]);
    }
}

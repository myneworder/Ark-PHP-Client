<?php

/*
 * This file is part of Ark PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\Ark;

/**
 * @coversNothing
 */
class TransactionTest extends TestCase
{
    /** @test */
    public function can_get_transactions()
    {
        // Act...
        $response = $this->getClient()->api('Transaction')->getTransactions();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_transaction()
    {
        // Act...
        $response = $this->getClient()->api('Transaction')->getTransaction();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_unconfirmed_transaction()
    {
        // Act...
        $response = $this->getClient()->api('Transaction')->getUnconfirmedTransaction();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_get_unconfirmed_transactions()
    {
        // Act...
        $response = $this->getClient()->api('Transaction')->getUnconfirmedTransactions();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }

    /** @test */
    public function can_add_transactions()
    {
        // Act...
        $response = $this->getClient()->api('Transaction')->addTransactions();

        // Assert...
        $this->assertTrue($response->isSuccess());
    }
}

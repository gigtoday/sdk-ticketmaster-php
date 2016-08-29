<?php

/**
 * ClientFactory.php - created 29 Aug 2016 15:34:39
 *
 * @copyright Copyright (c) Mathias Schilling <m@matchilling>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */
namespace Ticketmaster\Test\Api;

/**
 *
 * ClientFactory
 *
 * @package Ticketmaster\Test\Api
 *
 */
class ClientFactory extends \Ticketmaster\Test\AbstractTest
{

    /**
     *
     * @covers \Ticketmaster\Api\ClientFactory::fromEnv
     */
    public function testFromEnv()
    {
        $this->assertInstanceOf(\Ticketmaster\Api\Client::class, \Ticketmaster\Api\ClientFactory::fromEnv());
    }

    /**
     *
     * @expectedException \Ticketmaster\Lib\Exception\InvalidArgumentException
     * @covers \Ticketmaster\Api\ClientFactory::fromEnv
     */
    public function testFromEnvException()
    {
        putenv('TICKETMASTER_CONSUMER_KEY=0');

        \Ticketmaster\Api\ClientFactory::fromEnv();
    }
}

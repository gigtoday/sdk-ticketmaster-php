<?php

/**
 * Client.php - created 29 Aug 2016 16:31:31
 *
 * @copyright Copyright (c) Mathias Schilling <m@matchilling>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */
namespace Ticketmaster\Test\ApiLive;

/**
 *
 * Client
 *
 * @package Ticketmaster\Test\Api
 *
 */
class Client extends \Ticketmaster\Test\AbstractTest
{

    /**
     *
     * @var \Ticketmaster\Api\Client
     */
    private $client;

    /**
     *
     * @return void
     */
    public function setUp()
    {
        $this->client = \Ticketmaster\Api\ClientFactory::fromEnv();
    }

    /**
     *
     * @see \Ticketmaster\Api\Client::getEventDetails
     */
    public function testGetEventDetails()
    {
        $this->assertInstanceOf(
            \Ticketmaster\Lib\Entity\Event::class,
            $response = $this->client->getEventDetails(
                [ 'id' => '1AKZAv_GkdkdtBM' ]
            )
        );
    }

    /**
     *
     * @see \Ticketmaster\Api\Client::getEventImages
     */
    public function testGetEventImages()
    {
        $this->assertContainsOnly(
            \Ticketmaster\Lib\Entity\Image::class,
            $response = $this->client->getEventImages(
                [ 'id' => '1AKZAv_GkdkdtBM' ]
            )
        );
    }

    /**
     *
     * @see \Ticketmaster\Api\Client::searchEvents
     */
    public function testSearchEvents()
    {
        $this->assertInstanceOf(
            \Ticketmaster\Lib\Entity\EventCollection::class,
            $response = $this->client->searchEvents()
        );
    }
}

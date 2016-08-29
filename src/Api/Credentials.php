<?php

/**
 * Credentials.php - created 29 Aug 2016 14:40:26
 *
 * @copyright Copyright (c) Mathias Schilling <m@matchilling>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */
namespace Ticketmaster\Api;

/**
 *
 * Credentials
 *
 * @package \Ticketmaster\Api
 *
 */
class Credentials
{

    /**
     * Consumer key issued by ticketmaster
     *
     * @var string
     */
    private $consumerKey;

    /**
     * Consumer secret issued by ticketmaster
     *
     * @var string
     */
    private $consumerSecret;

    /**
     *
     * @param string $consumerKey
     * @param string $consumerSecret
     * @return void
     */
    public function __construct($consumerKey, $consumerSecret = null)
    {
        \Ticketmaster\Lib\Util::guardNotNull($consumerKey);

        $this->consumerKey    = $consumerKey;
        $this->consumerSecret = $consumerSecret;
    }

    /**
     *
     * @return string
     */
    public function getConsumerKey()
    {
        return $this->consumerKey;
    }

    /**
     *
     * @return int
     */
    public function getConsumerSecret()
    {
        return $this->consumerSecret;
    }
}

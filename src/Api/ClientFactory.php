<?php

/**
 * ClientFactory.php - created 29 Aug 2016 15:21:32
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
 * ClientFactory
 *
 * @package \Ticketmaster\Api;
 *
 */
class ClientFactory
{

    /**
     *
     * @return \Ticketmaster\Api\Client
     */
    public static function fromEnv()
    {
        if (! $consumerKey = getenv('TICKETMASTER_CONSUMER_KEY')) {
            throw new \Ticketmaster\Lib\Exception\InvalidArgumentException(
                sprintf(
                    'Environment variable "%s" must be set.',
                    'TICKETMASTER_CONSUMER_KEY'
                )
            );
        }

        return new \Ticketmaster\Api\Client(
            new \Ticketmaster\Api\Credentials(
                $consumerKey,
                $consumerSecret = getenv('TICKETMASTER_CONSUMER_SECRET') ? : null
            )
        );
    }
}

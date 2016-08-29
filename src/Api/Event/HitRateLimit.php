<?php

/**
 * HitRateLimit.php - created 29 Aug 2016 16:55:16
 *
 * @copyright Copyright (c) Mathias Schilling <m@matchilling>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */
namespace Ticketmaster\Api\Event;

use Ticketmaster\Lib\Exception as Exception;

/**
 *
 * HitRateLimit
 *
 * This event is fired if the client has made too many api calls in a given
 * time period.
 *
 * The best way to deal with rate limiting is to process the api requests
 * in a queuing system. You can then defer jobs that access the API, upon the
 * first 429 response, until after the rate has been reset. This approach has
 * the advantage of using the API as fast as is possible, then pausing.
 *
 * A less desirable solution is to pause/sleep any processes that use the API
 * after each call; this doesn’t respond as well to changes in the limits, nor
 * to two processes using the API at once.
 *
 * @package \Ticketmaster\Api
 *
 */
class HitRateLimit extends \Symfony\Component\EventDispatcher\Event
{

    /**
     *
     * @var string
     */
    const NAME = 'hit_rate_limit';

    /**
     *
     * @var Exception\RateLimitException
     */
    protected $exception;

    /**
     *
     * @param Exception\RateLimitException $exception
     * @return void
     */
    public function __construct(Exception\RateLimitException $exception)
    {
        $this->exception = $exception;
    }

    /**
     *
     * @return Exception\RateLimitException
     */
    public function getException()
    {
        return $this->exception;
    }

    /**
     *
     * @return \GuzzleHttp\Message\RequestInterface
     */
    public function getRequest()
    {
        return $this->exception->getRequest();
    }

    /**
     *
     * @return \GuzzleHttp\Message\ResponseInterface|null
     */
    public function getResponse()
    {
        return $this->exception->getResponse();
    }
}

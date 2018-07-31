<?php

/**
 * Client.php - created 29 Aug 2016 14:40:26
 *
 * @copyright Copyright (c) Mathias Schilling <m@matchilling>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */
namespace Ticketmaster\Api;

use Ticketmaster\Api\Event as Event;
use Ticketmaster\Lib\Exception as Exception;

/**
 *
 * Client
 *
 * @package \Ticketmaster\Api
 *
 * @method \Ticketmaster\Lib\Entity\Event           getEventDetails
 * @method \Ticketmaster\Lib\Entity\Image[]         getEventImages
 * @method \Ticketmaster\Lib\Entity\EventCollection searchEvents
 *
 */
class Client
{
    /**
     *
     * @var \Ticketmaster\Api\Credentials
     */
    private $credentials;

    /**
     *
     * @var \Symfony\Component\EventDispatcher\EventDispatcherInterface
     */
    private $eventDispatcher;

    /**
     *
     * @var array
     */
    private $options = [];

    /**
     *
     * @var \GuzzleHttp\Command\Guzzle\GuzzleClient
     */
    private $serviceClient;

    /**
     *
     * @param \Ticketmaster\Api\Credentials $credentials
     * @param array $options {}
     * @param \Symfony\Component\EventDispatcher\EventSubscriberInterface[] $subscribers
     */
    public function __construct(
        \Ticketmaster\Api\Credentials $credentials,
        array $options = [],
        array $subscribers = []
    ) {

        $this->credentials = $credentials;
        $this->eventDispatcher = new \Symfony\Component\EventDispatcher\EventDispatcher();
        $this->setEventSubscriber($subscribers);
        $this->setOptions($options);
        $this->setServiceClient($credentials);
    }

    /**
     * Call a given method on the web service client
     *
     * @param  string $name
     * @param  array  $parameters
     * @return array
     */
    public function __call($name, array $parameters = [])
    {
        $parameters = array_merge(
            isset($parameters[0]) ? $parameters[0] : [],
            [
                'apikey'  => $this->credentials->getConsumerKey(),
                'format'  => 'json',
                'version' => 'v2'
            ]
        );

        $command   = $this->serviceClient->getCommand($name, $parameters);
        $operation = $this->serviceClient->getDescription()->getOperation($name);
        $response  = $this->executeCommand($command);

        return $operation->getData('entityClass')
            ? \Ticketmaster\Lib\Entity\Factory::fromGuzzleCommandOperation($operation, $response)
            : $response;
    }

    /**
     *
     * @param  \GuzzleHttp\Command\CommandInterface $command
     * @param  int                                  $retries
     * @throws Exception\RuntimeException
     * @throws Exception\RateLimitException
     * @return \GuzzleHttp\Ring\Future\FutureArray
     */
    private function executeCommand(\GuzzleHttp\Command\CommandInterface $command, $retries = 5)
    {
        if (0 >= $retries) {
            throw new Exception\RuntimeException('Maximum number of api call retries reached.');
        }

        try {
            return $this->serviceClient->execute($command);
        } catch (\GuzzleHttp\Command\Exception\CommandClientException $exception) {
            if (429 === $exception->getCode()) {
                $this->eventDispatcher->dispatch(Event\HitRateLimit::NAME, new Event\HitRateLimit($exception));

                throw new Exception\RateLimitException(
                    $exception->getMessage(),
                    $exception->getTransaction(),
                    $exception->getPrevious()
                );
            }

            throw new Exception\RuntimeException('Unsupported error detected.', $exception->getCode(), $exception);
        }
    }

    /**
     *
     * @return \Yosymfony\ConfigLoader\RepositoryInterface
     */
    private function loadServiceDescriptions()
    {
        $fileLocator = new \Symfony\Component\Config\FileLocator(
            sprintf('%s/../config', dirname(__DIR__))
        );

        $loader = new \Yosymfony\ConfigLoader\Loaders\JsonLoader($fileLocator);

        return $loader->load('service_description.json');
    }

    /**
     *
     * @param  \Symfony\Component\EventDispatcher\EventSubscriberInterface[] $subscribers
     * @return void
     */
    private function setEventSubscriber(array $subscribers)
    {
        foreach ($subscribers as $subscriber) {
            $this->eventDispatcher->addSubscriber($subscriber);
        }
    }

    /**
     *
     * @param array $options
     */
    private function setOptions(array $options)
    {
        $this->options = array_merge($this->options, $options);
    }

    /**
     *
     * @param \Ticketmaster\Api\Credentials $credentials
     * @return void
     */
    private function setServiceClient(\Ticketmaster\Api\Credentials $credentials)
    {
        $client = new \GuzzleHttp\Client([
            'base_url' => 'https://app.ticketmaster.com',
            'defaults' => [
                'timeout' => 10,
                'headers' => [
                    'user-agent'    => 'gigtoday/sdk-ticketmaster-php <m@matchilling.com>'
                ]
            ]
        ]);

        $this->serviceClient = new \GuzzleHttp\Command\Guzzle\GuzzleClient(
            $client,
            new \GuzzleHttp\Command\Guzzle\Description(
                $this->loadServiceDescriptions()->getArray()
            )
        );
    }
}

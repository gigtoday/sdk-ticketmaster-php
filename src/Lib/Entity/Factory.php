<?php

/**
 * Factory.php - created 29 Aug 2016 14:40:26
 *
 * @copyright Copyright (c) Mathias Schilling <m@matchilling>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */
namespace Ticketmaster\Lib\Entity;

/**
 *
 * Factory
 *
 * @package \Ticketmaster\Lib
 *
 */
class Factory
{

    /**
     *
     * @var \JMS\Serializer\Serializer
     */
    private static $serializer;

    /**
     *
     * @param  string $entityClassName
     * @param  array  $array
     * @return null|object|object[]
     */
    public static function fromArray($entityClassName, array $array)
    {
        if (! $array) {
            return null;
        }

        $entityClassName = '[]' === substr($entityClassName, - 2)
            ? $entityClassName = sprintf(
                'array<%s>',
                ltrim(rtrim($entityClassName, '[]'), '\\')
            )
            : $entityClassName;

        return self::getSerializer()->fromArray($array, $entityClassName);
    }

    /**
     *
     * @param  string  $entityClassName
     * @param  array[] $array
     * @return null|object[]
     */
    private static function collectionFromArray($entityClassName, array $array)
    {
        return ! (empty($array))
            ? self::getSerializer()->fromArray($array, self::getCollectionClassName($entityClassName))
            : null;
    }

    /**
     *
     * @param  \GuzzleHttp\Command\Guzzle\Operation $operation
     * @param  array $response
     * @throws \Ticketmaster\Lib\Exception\InvalidArgumentException
     * @return object
     */
    public static function fromGuzzleCommandOperation(
        \GuzzleHttp\Command\Guzzle\Operation $operation,
        array $response
    ) {

        if (! $response['body'] instanceof \GuzzleHttp\Psr7\Stream) {
            throw new \Ticketmaster\Lib\Exception\InvalidArgumentException(
                sprintf(
                    'Response body must be an instance of "%s",',
                    \GuzzleHttp\Psr7\Stream::class
                )
            );
        }

        $jsonPath = new \Flow\JSONPath\JSONPath(
            json_decode($response['body']->getContents(), true)
        );

        return self::fromArray(
            $operation->getData('entityClass'),
            $jsonPath->find($operation->getData('jsonPath'))->first()->data()
        );
    }

    /**
     *
     * @return \JMS\Serializer\Serializer
     */
    private static function getSerializer()
    {
        if (null == self::$serializer) {
            self::setSerializer();
        }

        return self::$serializer;
    }

    /**
     *
     * @return void
     */
    private static function setSerializer()
    {
        \Doctrine\Common\Annotations\AnnotationRegistry::registerLoader('class_exists');

        $builder = \JMS\Serializer\SerializerBuilder::create();
        $builder->addDefaultHandlers();

        self::$serializer = $builder->build();
    }

    /**
     *
     * @param  object|object[] $object
     * @return array|array[]
     */
    public static function toArray($object)
    {
        return self::getSerializer()->toArray($object);
    }
}

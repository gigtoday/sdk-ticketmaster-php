<?php

/**
 * Attraction.php - created 29 Aug 2016 20:31:40
 *
 * @copyright Copyright (c) Mathias Schilling <m@matchilling>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */
namespace Ticketmaster\Lib\Entity;

use \JMS\Serializer\Annotation\Type as SerializedType;
use \JMS\Serializer\Annotation\SerializedName;

/**
 *
 * Attraction
 *
 * @package Ticketmaster\Lib
 *
 * @method Classification[] getClassifications
 * @method string           getId
 * @method Image            getImage
 * @method Image[]          getImages
 * @method string           getLocale
 * @method string           getName
 * @method string           getType
 * @method string           getUrl
 * @method boolean          isTest
 *
 */
class Attraction extends AbstractEntity
{

    /**
     *
     * @SerializedType("array<Ticketmaster\Lib\Entity\Classification>") @SerializedName("classifications")
     * @var Classification[]
     */
    private $classifications;

    /**
     *
     * @SerializedType("string") @SerializedName("id")
     * @var string
     */
    private $id;

    /**
     *
     * @SerializedType("Ticketmaster\Lib\Entity\Image") @SerializedName("image")
     * @var Image
     */
    private $image;

    /**
     *
     * @SerializedType("array<Ticketmaster\Lib\Entity\Image>") @SerializedName("images")
     * @var Image[]
     */
    private $images;

    /**
     *
     * @SerializedType("string") @SerializedName("locale")
     * @var string
     */
    private $locale = 'en-us';

    /**
     *
     * @SerializedType("string") @SerializedName("name")
     * @var string
     */
    private $name;

    /**
     *
     * @SerializedType("boolean") @SerializedName("test")
     * @var boolean
     */
    private $test = false;

    /**
     *
     * @SerializedType("string") @SerializedName("type")
     * @var string
     */
    private $type;

    /**
     *
     * @SerializedType("string") @SerializedName("url")
     * @var string
     */
    private $url;
}

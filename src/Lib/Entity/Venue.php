<?php

/**
 * Venue.php - created 29 Aug 2016 20:31:40
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
use JMS\Serializer\Tests\Fixtures\GetSetObject;

/**
 *
 * Venue
 *
 * @package Ticketmaster\Lib
 *
 * @method Address  getAddress
 * @method City     getCity
 * @methid Country  getCountry
 * @method string   getId
 * @method string   getLocale
 * @method Location getLocation
 * @method array    getMarkets
 * @method string   getName
 * @method string   getPostalCode
 * @method State    getState
 * @method string   getTimeZone
 * @method string   getType
 * @method boolean  isTest
 *
 */
class Venue extends AbstractEntity
{

    /**
     *
     * @SerializedType("Ticketmaster\Lib\Entity\Address") @SerializedName("address")
     * @var Address
     */
    private $address;

    /**
     *
     * @SerializedType("Ticketmaster\Lib\Entity\City") @SerializedName("city")
     * @var State
     */
    private $city;

    /**
     *
     * @SerializedType("Ticketmaster\Lib\Entity\Country") @SerializedName("country")
     * @var Country
     */
    private $country;

    /**
     *
     * @SerializedType("string") @SerializedName("id")
     * @var string
     */
    private $id;

    /**
     *
     * @SerializedType("string") @SerializedName("locale")
     * @var string
     */
    private $locale = 'en-us';

    /**
     *
     * @SerializedType("Ticketmaster\Lib\Entity\Location") @SerializedName("location")
     * @var Location
     */
    private $location;

    /**
     *
     * @SerializedType("array") @SerializedName("markets")
     * @var array
     */
    private $markets;

    /**
     *
     * @SerializedType("string") @SerializedName("name")
     * @var string
     */
    private $name;

    /**
     *
     * @SerializedType("string") @SerializedName("postalCode")
     * @var string
     */
    private $postalCode;

    /**
     *
     * @SerializedType("Ticketmaster\Lib\Entity\State") @SerializedName("state")
     * @var State
     */
    private $state;

    /**
     *
     * @SerializedType("boolean") @SerializedName("test")
     * @var boolean
     */
    private $test = false;

    /**
     *
     * @SerializedType("string") @SerializedName("timeZone")
     * @var string
     */
    private $timeZone;

    /**
     *
     * @SerializedType("string") @SerializedName("type")
     * @var string
     */
    private $type;
}

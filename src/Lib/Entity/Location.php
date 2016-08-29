<?php

/**
 * Location.php - created 29 Aug 2016 21:59:25
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
 * Location
 *
 * @package Ticketmaster\Lib
 *
 * @method float getLatitude
 * @method float getLongitude
 *
 */
class Location extends AbstractEntity
{

    /**
     *
     * @SerializedType("float") @SerializedName("latitude")
     * @var float
     */
    private $latitude;

    /**
     *
     * @SerializedType("float") @SerializedName("longitude")
     * @var float
     */
    private $longitude;
}

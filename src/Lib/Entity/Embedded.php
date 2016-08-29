<?php

/**
 * Embedded.php - created 29 Aug 2016 19:25:54
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
 * Embedded
 *
 * @package Ticketmaster\Lib
 *
 * @method Attraction[] getAttractions
 * @method Event[]      getEvents
 * @method Venue[]      getVenues
 * @method boolean      hasAttractions
 * @method boolean      hasEvents
 * @method boolean      hasVenues
 *
 */
class Embedded extends AbstractEntity
{

    /**
     *
     * @SerializedType("array<Ticketmaster\Lib\Entity\Attraction>") @SerializedName("attractions")
     * @var Attraction[]
     */
    private $attractions;

    /**
     *
     * @SerializedType("array<Ticketmaster\Lib\Entity\Event>") @SerializedName("events")
     * @var Event[]
     */
    private $events;

    /**
     *
     * @SerializedType("array<Ticketmaster\Lib\Entity\Venue>") @SerializedName("venues")
     * @var Venue[]
     */
    private $venues;
}

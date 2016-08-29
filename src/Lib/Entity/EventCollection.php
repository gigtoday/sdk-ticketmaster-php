<?php

/**
 * EventCollection.php - created 29 Aug 2016 15:36:40
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
 * EventCollection
 *
 * @package Ticketmaster\Lib
 *
 * @method Embedded getEmbedded
 * @method Pagination getPagination
 *
 */
class EventCollection extends AbstractEntity
{

    /**
     *
     * @SerializedType("Ticketmaster\Lib\Entity\Embedded") @SerializedName("_embedded")
     * @var Embedded
     */
    private $embedded;

    /**
     *
     * @SerializedType("Ticketmaster\Lib\Entity\Pagination") @SerializedName("page")
     * @var Pagination
     */
    private $pagination;

    /**
     *
     * @return \Ticketmaster\Lib\Entity\Event[]|array
     */
    public function getEvents()
    {
        return isset($this->embedded['events'])
            ? $this->embedded['events']
            : [];
    }
}

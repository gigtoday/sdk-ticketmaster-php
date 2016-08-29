<?php

/**
 * DateCollection.php - created 29 Aug 2016 19:46:29
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
 * DateCollection
 *
 * @package Ticketmaster\Lib
 *
 * @method AccessDate getAccessDate
 * @method EndDate    getEndDate
 * @method StartDate  getStartDate
 * @method Status     getStatus
 * @method string     getTimezone
 *
 */
class DateCollection extends AbstractEntity
{

    /**
     *
     * @SerializedType("Ticketmaster\Lib\Entity\AccessDate") @SerializedName("access")
     * @var AccessDate
     */
    private $accessDate;

    /**
     *
     * @SerializedType("Ticketmaster\Lib\Entity\EndDate") @SerializedName("end")
     * @var EndDate
     */
    private $endDate;

    /**
     *
     * @SerializedType("Ticketmaster\Lib\Entity\StartDate") @SerializedName("start")
     * @var StartDate
     */
    private $startDate;

    /**
     *
     * @SerializedType("Ticketmaster\Lib\Entity\Status") @SerializedName("status")
     * @var Status
     */
    private $status;

    /**
     *
     * @SerializedType("string") @SerializedName("timezone")
     * @var string
     */
    private $timezone;
}

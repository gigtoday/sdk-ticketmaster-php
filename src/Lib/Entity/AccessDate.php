<?php

/**
 * AccessDate.php - created 29 Aug 2016 20:01:25
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
 * AccessDate
 *
 * @package Ticketmaster\Lib
 *
 * @method \DateTime getEndDateTime
 * @method \DateTime getStartDateTime
 * @method boolean   isEndApproximate
 * @method boolean   isStartApproximate
 *
 */
class AccessDate extends AbstractEntity
{

    /**
     *
     * @SerializedType("boolean") @SerializedName("endApproximate")
     * @var boolean
     */
    private $endApproximate;

    /**
     *
     * @SerializedType("DateTime<'Y-m-d\TH:i:s\Z'>") @SerializedName("endDateTime")
     * @var \DateTime
     */
    private $endDateTime;

    /**
     *
     * @SerializedType("boolean") @SerializedName("startApproximate")
     * @var boolean
     */
    private $startApproximate;

    /**
     *
     * @SerializedType("DateTime<'Y-m-d\TH:i:s\Z'>") @SerializedName("startDateTime")
     * @var \DateTime
     */
    private $startDateTime;
}

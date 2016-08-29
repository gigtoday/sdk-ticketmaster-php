<?php

/**
 * EndDate.php - created 29 Aug 2016 20:01:25
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
 * EndDate
 *
 * @package Ticketmaster\Lib
 *
 * @method \DateTime getDateTime
 * @method boolean   isApproximate
 *
 */
class EndDate extends AbstractEntity
{

    /**
     *
     * @SerializedType("boolean") @SerializedName("approximate")
     * @var boolean
     */
    private $approximate;

    /**
     *
     * @SerializedType("DateTime<'Y-m-d\TH:i:s\Z'>") @SerializedName("dateTime")
     * @var \DateTime
     */
    private $dateTime;
}

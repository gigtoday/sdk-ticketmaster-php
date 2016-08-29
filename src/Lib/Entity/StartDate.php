<?php

/**
 * StartDate.php - created 29 Aug 2016 19:54:45
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
 * StartDate
 *
 * @package Ticketmaster\Lib
 *
 * @method string    getDateTime
 * @method \DateTime getLocalDate
 * @method \DateTime getLocalTime
 * @method boolean   isDateTBA
 * @method boolean   isDateTBD
 * @method boolean   isNoSpecificTime
 * @method boolean   isTimeTBA
 *
 */
class StartDate extends AbstractEntity
{

    /**
     *
     * @SerializedType("boolean") @SerializedName("dateTBA")
     * @var boolean
     */
    private $dateTBA;

    /**
     *
     * @SerializedType("boolean") @SerializedName("dateTBD")
     * @var boolean
     */
    private $dateTBD;

    /**
     *
     * @SerializedType("DateTime<'Y-m-d\TH:i:s\Z'>") @SerializedName("dateTime")
     * @var \DateTime
     */
    private $dateTime;

    /**
     *
     * @SerializedType("DateTime<'Y-m-d'>") @SerializedName("localDate")
     * @var \DateTime
     */
    private $localDate;

    /**
     *
     * @SerializedType("DateTime<'H:i:s'>") @SerializedName("localTime")
     * @var \DateTime
     */
    private $localTime;

    /**
     *
     * @SerializedType("boolean") @SerializedName("noSpecificTime")
     * @var boolean
     */
    private $noSpecificTime;

    /**
     *
     * @SerializedType("boolean") @SerializedName("timeTBA")
     * @var boolean
     */
    private $timeTBA;
}

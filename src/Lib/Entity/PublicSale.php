<?php

/**
 * PublicSale.php - created 29 Aug 2016 20:10:01
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
 * PublicSale
 *
 * @package Ticketmaster\Lib
 *
 * @method string  getEndDateTime
 * @method string  getStartDateTime
 * @method boolean isStartTBD
 *
 */
class PublicSale extends AbstractEntity
{

    /**
     * Date and time start of public sales.
     *
     * @SerializedType("string") @SerializedName("endDateTime")
     * @var string
     */
    private $endDateTime;

    /**
     * Date and time end of public sales.
     *
     * @SerializedType("string") @SerializedName("startDateTime")
     * @var string
     */
    private $startDateTime;

    /**
     * Indicates if is start TBD.
     *
     * @SerializedType("boolean") @SerializedName("startTBD")
     * @var boolean
     */
    private $startTBD;
}

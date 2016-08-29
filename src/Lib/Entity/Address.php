<?php

/**
 * Address.php - created 29 Aug 2016 22:02:22
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
 * Address
 *
 * @package Ticketmaster\Lib
 *
 * @method string getLine1
 * @method string getLine2
 *
 */
class Address extends AbstractEntity
{

    /**
     *
     * @SerializedType("string") @SerializedName("line1")
     * @var string
     */
    private $line1;

    /**
     *
     * @SerializedType("string") @SerializedName("line2")
     * @var string
     */
    private $line2;
}

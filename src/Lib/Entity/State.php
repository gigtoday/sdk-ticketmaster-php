<?php

/**
 * State.php - created 29 Aug 2016 21:52:03
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
 * State
 *
 * @package Ticketmaster\Lib
 *
 * @method string getStateCode
 * @method string getName
 *
 */
class State extends AbstractEntity
{

    /**
     *
     * @SerializedType("string") @SerializedName("stateCode")
     * @var string
     */
    private $stateCode;

    /**
     *
     * @SerializedType("string") @SerializedName("name")
     * @var string
     */
    private $name;
}

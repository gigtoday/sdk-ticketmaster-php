<?php

/**
 * SubGenre.php - created 29 Aug 2016 19:39:05
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
 * SubGenre
 *
 * @package Ticketmaster\Lib
 *
 * @method string getId
 * @method string getName
 *
 */
class SubGenre extends AbstractEntity
{

    /**
     *
     * @SerializedType("string") @SerializedName("id")
     * @var string
     */
    private $id;

    /**
     *
     * @SerializedType("string") @SerializedName("name")
     * @var string
     */
    private $name;
}

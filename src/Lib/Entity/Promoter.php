<?php

/**
 * Promoter.php - created 29 Aug 2016 20:15:16
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
 * Promoter
 *
 * @package Ticketmaster\Lib
 *
 * @method string getId
 *
 */
class Promoter extends AbstractEntity
{

    /**
     *
     * @SerializedType("string") @SerializedName("id")
     * @var string
     */
    private $id;
}

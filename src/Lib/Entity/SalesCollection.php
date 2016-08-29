<?php

/**
 * SalesCollection.php - created 29 Aug 2016 20:08:13
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
 * SalesCollection
 *
 * @package Ticketmaster\Lib
 *
 * @method PublicSale getPublicSale
 *
 */
class SalesCollection extends AbstractEntity
{

    /**
     *
     * @SerializedType("Ticketmaster\Lib\Entity\PublicSale") @SerializedName("public")
     * @var PublicSale
     */
    private $public;
}

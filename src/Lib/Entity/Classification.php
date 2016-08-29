<?php

/**
 * Classification.php - created 29 Aug 2016 19:36:28
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
 * Classification
 *
 * @package Ticketmaster\Lib
 *
 * @method Ticketmaster\Lib\Entity\Genre    getGenre
 * @method Ticketmaster\Lib\Entity\SubGenre getSubGenre
 * @method boolean                          isPrimary
 *
 */
class Classification extends AbstractEntity
{

    /**
     *
     * @SerializedType("Ticketmaster\Lib\Entity\Genre") @SerializedName("genre")
     * @var Genre
     */
    private $genre;

    /**
     *
     * @SerializedType("boolean") @SerializedName("primary")
     * @var boolean
     */
    private $primary;

    /**
     *
     * @SerializedType("Ticketmaster\Lib\Entity\SubGenre") @SerializedName("subGenre")
     * @var SubGenre
     */
    private $subGenre;
}

<?php

/**
 * Pagination.php - created 29 Aug 2016 17:22:55
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
 * Pagination
 *
 * @package Ticketmaster\Lib
 *
 */
class Pagination extends AbstractEntity
{

    /**
     * Current page number, counted from zero '0'
     *
     * @SerializedType("integer") @SerializedName("number")
     * @var integer
     */
    protected $page;

    /**
     * Total number of pages
     *
     * @SerializedType("integer") @SerializedName("totalPages")
     * @var integer
     */
    protected $pages;

    /**
     * The number of elements on the current page
     *
     * @SerializedType("integer") @SerializedName("size")
     * @var integer
     */
    protected $size;

    /**
     * Total number of elements
     *
     * @SerializedType("integer") @SerializedName("totalElements")
     * @var integer
     */
    protected $total;
}

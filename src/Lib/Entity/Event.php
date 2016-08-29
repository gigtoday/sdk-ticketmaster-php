<?php

/**
 * Event.php - created 29 Aug 2016 15:36:40
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
 * Event
 *
 * @package Ticketmaster\Lib
 *
 */
class Event extends AbstractEntity
{

    /**
     *
     * @SerializedType("array<Ticketmaster\Lib\Entity\Classification>") @SerializedName("classifications")
     * @var Classification[]
     */
    private $classifications;

    /**
     *
     * @SerializedType("Ticketmaster\Lib\Entity\Embedded") @SerializedName("embedded")
     * @var Embedded
     */
    private $embedded;

    /**
     *
     * @SerializedType("Ticketmaster\Lib\Entity\DateCollection") @SerializedName("dates")
     * @var DateCollection
     */
    private $dates;

    /**
     *
     * @SerializedType("string") @SerializedName("id")
     * @var string
     */
    private $id;

    /**
     *
     * @SerializedType("array<Ticketmaster\Lib\Entity\Image>") @SerializedName("images")
     * @var Image[]
     */
    private $images;

    /**
     *
     * @SerializedType("string") @SerializedName("info")
     * @var string
     */
    private $info;

    /**
     *
     * @SerializedType("string") @SerializedName("locale")
     * @var string
     */
    private $locale = 'en-us';

    /**
     *
     * @SerializedType("string") @SerializedName("pleaseNote")
     * @var string
     */
    private $pleaseNote;

    /**
     *
     * @SerializedType("array<Ticketmaster\Lib\Entity\Price>") @SerializedName("priceRanges")
     * @var Price[]
     */
    private $prices;

    /**
     *
     * @SerializedType("Ticketmaster\Lib\Entity\Promoter") @SerializedName("promoter")
     * @var Promoter
     */
    private $promoter;

    /**
     *
     * @SerializedType("Ticketmaster\Lib\Entity\SalesCollection") @SerializedName("sales")
     * @var SalesCollection
     */
    private $sales;

    /**
     *
     * @SerializedType("boolean") @SerializedName("test")
     * @var boolean
     */
    private $test = false;

    /**
     *
     * @SerializedType("string") @SerializedName("type")
     * @var string
     */
    private $type;

    /**
     *
     * @SerializedType("string") @SerializedName("url")
     * @var string
     */
    private $url;
}

<?php

/**
 * Image.php - created 29 Aug 2016 15:36:40
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
 * Image
 *
 * @package Ticketmaster\Lib
 *
 * @method integer getHeight
 * @method string  getRatio
 * @method string  getUrl
 * @method string  getWidth
 * @method boolean hasFallback
 *
 */
class Image extends AbstractEntity
{

    /**
     *
     * @SerializedType("boolean") @SerializedName("fallback")
     * @var boolean
     */
    private $fallback = false;

    /**
     *
     * @SerializedType("integer") @SerializedName("height")
     * @var integer
     */
    private $height;

    /**
     *
     * @SerializedType("string") @SerializedName("ratio")
     * @var string
     */
    private $ratio;

    /**
     *
     * @SerializedType("string") @SerializedName("url")
     * @var string
     */
    private $url;

    /**
     *
     * @SerializedType("integer") @SerializedName("width")
     * @var integer
     */
    private $width;
}

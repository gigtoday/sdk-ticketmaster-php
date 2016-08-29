<?php

/**
 * Status.php - created 29 Aug 2016 19:49:50
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
 * Status
 *
 * @package Ticketmaster\Lib
 *
 * @method string getCode
 *
 */
class Status extends AbstractEntity
{

    /**
     *
     * @SerializedType("string") @SerializedName("code")
     * @var string
     */
    private $code;

    /**
     *
     * @var string
     */
    const CODE_ONSALE = 'onsale';

    /**
     *
     * @return boolean
     */
    public function isOnsale()
    {
        return self::CODE_ONSALE === $this->code ? true : false;
    }
}

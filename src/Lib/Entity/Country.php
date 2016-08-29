<?php

/**
 * Country.php - created 29 Aug 2016 21:52:03
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
 * Country
 *
 * @package Ticketmaster\Lib
 *
 * @method string getCountryCode
 * @method string getName
 *
 */
class Country extends AbstractEntity
{

    /**
     *
     * @SerializedType("string") @SerializedName("countryCode")
     * @var string
     */
    private $countryCode;

    /**
     *
     * @SerializedType("string") @SerializedName("name")
     * @var string
     */
    private $name;
}

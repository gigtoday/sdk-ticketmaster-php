<?php

/**
 * Price.php - created 29 Aug 2016 20:16:59
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
 * Price
 *
 * @package Ticketmaster\Lib
 *
 * @method string getCurrency
 * @method string getMax
 * @method string getMin
 * @method string getType
 *
 */
class Price extends AbstractEntity
{

    /**
     *
     * @SerializedType("string") @SerializedName("currency")
     * @var string
     */
    private $currency;

    /**
     *
     * @SerializedType("float") @SerializedName("max")
     * @var float
     */
    private $max;

    /**
     *
     * @SerializedType("float") @SerializedName("min")
     * @var float
     */
    private $min;

    /**
     *
     * @SerializedType("string") @SerializedName("tyep")
     * @var string
     */
    private $type = self::TYPE_STANDARD;

    /**
     *
     * @var string
     */
    const TYPE_STANDARD = 'standard';

    /**
     *
     * @return boolean
     */
    public function isTypeStandard()
    {
        return self::TYPE_STANDARD === $this->type ? true : false;
    }
}

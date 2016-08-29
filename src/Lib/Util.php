<?php

/**
 * Util.php - created 29 Aug 2016 14:40:26
 *
 * @copyright Copyright (c) Mathias Schilling <m@matchilling>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */
namespace Ticketmaster\Lib;

/**
 *
 * Util
 *
 * @package \Ticketmaster\Lib
 *
 */
class Util
{

    /**
     *
     * @param  mixed $parameter
     * @throws \Ticketmaster\Lib\Exception\InvalidArgumentException
     * @return void
     */
    public static function guardNotNull($parameter)
    {
        foreach (func_get_args() as $parameter) {
            if (null === $parameter) {
                throw new \Ticketmaster\Lib\Exception\InvalidArgumentException(
                    sprintf('Parameter cannot be null.')
                );
            }
        }
    }
}

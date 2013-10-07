<?php
/**
 * This file is part of the Zimbra API in PHP library.
 *
 * © Nguyen Van Nguyen <nguyennv1981@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zimbra\Soap\Enum;

/**
 * DistributionListSubscribeOp class
 * @package   Zimbra
 * @category  Soap
 * @author    Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright Copyright © 2013 by Nguyen Van Nguyen.
 */
class DistributionListSubscribeOp
{
    /**
     * Constant for value 'subscribe'
     * @return string 'subscribe'
     */
    const SUBSCRIBE = 'subscribe';

    /**
     * Constant for value 'unsubscribe'
     * @return string 'unsubscribe'
     */
    const UNSUBSCRIBE = 'unsubscribe';

    /**
     * Return true if value is allowed
     * @param  string $op
     * @return bool true|false
     */
    public static function isValid($op)
    {
        $validValues = array(
            self::SUBSCRIBE,
            self::UNSUBSCRIBE,
        );
        return in_array($op, $validValues);
    }
}
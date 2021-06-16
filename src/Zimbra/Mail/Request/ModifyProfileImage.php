<?php
/**
 * This file is part of the Zimbra API in PHP library.
 *
 * © Nguyen Van Nguyen <nguyennv1981@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zimbra\Mail\Request;

/**
 * ModifyProfileImage request class
 * Modify Profile Image
 *
 * @package    Zimbra
 * @subpackage Mail
 * @category   Request
 * @author     Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright  Copyright © 2013 by Nguyen Van Nguyen.
 */
class ModifyProfileImage extends Base
{
    /**
     * Constructor method for ModifyProfileImage
     * @param  string $value base64 content of profile image.
     * @return self
     */
    public function __construct($value)
    {
        parent::__construct();
        $this->setValue($value);
    }
}

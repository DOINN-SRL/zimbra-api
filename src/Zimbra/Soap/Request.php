<?php
/**
 * This file is part of the Zimbra API in PHP library.
 *
 * © Nguyen Van Nguyen <nguyennv1981@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zimbra\Soap;

use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Serializer;

/**
 * Request class in Zimbra API PHP, not to be instantiated.
 * 
 * @package   Zimbra
 * @category  Soap
 * @author    Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright Copyright © 2013 by Nguyen Van Nguyen.
 */
abstract class Request implements RequestInterface
{
    /**
     * Serializer
     * @var JMS\Serializer\Serializer
     * @Exclude
     */
    private $_serializer;

    public function __construct()
    {
        AnnotationRegistry::registerLoader('class_exists');
        $this->_serializer = SerializerBuilder::create()->build();
    }

    /**
     * Get serializer.
     *
     * @return Serializer
     */
    protected function getSerializer()
    {
        return $this->_serializer;
    }
}

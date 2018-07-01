<?php
/**
 * This file is part of the Zimbra API in PHP library.
 *
 * © Nguyen Van Nguyen <nguyennv1981@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zimbra\Admin\Struct;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * QueueQueryField struct class
 *
 * @package    Zimbra
 * @subpackage Admin
 * @category   Struct
 * @author     Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright  Copyright © 2013 by Nguyen Van Nguyen.
 * @XmlRoot(name="field")
 */
class QueueQueryField
{
    /**
     * @Accessor(getter="getName", setter="setName")
     * @SerializedName("name")
     * @Type("string")
     * @XmlAttribute
     */
    private $_name;

    /**
     * Match specifications
     * @Accessor(getter="getMatches", setter="setMatches")
     * @Type("array<Zimbra\Admin\Struct\ValueAttrib>")
     * @XmlList(inline = true, entry = "match")
     */
    private $_matches;

    /**
     * Constructor method for QueueQueryField
     * @param  string $name Field name
     * @param  array $matches Match specifications
     * @return self
     */
    public function __construct($name, array $matches = [])
    {
        $this->setName($name)
             ->setMatches($matches);
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * Sets name
     *
     * @param  string $name
     * @return self
     */
    public function setName($name)
    {
        $this->_name = trim($name);
        return $this;
    }

    /**
     * Add a match
     *
     * @param  ValueAttrib $match
     * @return self
     */
    public function addMatch(ValueAttrib $match)
    {
        $this->_matches[] = $match;
        return $this;
    }

    /**
     * Sets match sequence
     *
     * @param  array $matches
     * @return self
     */
    public function setMatches(array $matches)
    {
        $this->_matches = [];
        foreach ($matches as $match) {
            if ($match instanceof ValueAttrib) {
                $this->_matches[] = $match;
            }
        }
        return $this;
    }

    /**
     * Gets match sequence
     *
     * @return array
     */
    public function getMatches()
    {
        return $this->_matches;
    }
}

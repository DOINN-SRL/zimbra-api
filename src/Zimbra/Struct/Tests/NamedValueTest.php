<?php

namespace Zimbra\Struct\Tests;

use Zimbra\Struct\NamedValue;

/**
 * Testcase class for NamedValue.
 */
class NamedValueTest extends ZimbraStructTestCase
{
    public function testNamedValue()
    {
        $name = $this->faker->word;
        $value = $this->faker->word;

        $named = new NamedValue($name, $value);
        $this->assertSame($name, $named->getName());
        $this->assertSame($value, $named->getValue());

        $named->setName($name);
        $this->assertSame($name, $named->getName());

        $xml = '<?xml version="1.0"?>' . "\n"
            . '<named name="' . $name . '">' . $value . '</named>';
        $this->assertXmlStringEqualsXmlString($xml, $this->serializer->serialize($named, 'xml'));

        $named = $this->serializer->deserialize($xml, 'Zimbra\Struct\NamedValue', 'xml');
        $this->assertSame($name, $named->getName());
        $this->assertSame($value, $named->getValue());
    }
}

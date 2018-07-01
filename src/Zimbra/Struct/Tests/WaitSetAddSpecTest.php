<?php

namespace Zimbra\Struct\Tests;

use Zimbra\Enum\InterestType;
use Zimbra\Struct\WaitSetAddSpec;

/**
 * Testcase class for WaitSetAddSpec.
 */
class WaitSetAddSpecTest extends ZimbraStructTestCase
{
    public function testWaitSetAddSpec()
    {
        $name = $this->faker->word;
        $id = $this->faker->word;
        $token = $this->faker->word;
        $interests = [
            $this->faker->word,
            InterestType::FOLDERS()->value(),
            InterestType::MESSAGES()->value(),
            InterestType::CONTACTS()->value(),
        ];

        $waitSet = new WaitSetAddSpec($name, $id, $token, implode(',', $interests));
        $this->assertSame($name, $waitSet->getName());
        $this->assertSame($id, $waitSet->getId());
        $this->assertSame($token, $waitSet->getToken());
        $this->assertSame('f,m,c', $waitSet->getInterests());

        $waitSet = new WaitSetAddSpec();
        $waitSet->setName($name)
                ->setId($id)
                ->setToken($token)
                ->setInterests(implode(',', $interests));
        $this->assertSame($name, $waitSet->getName());
        $this->assertSame($id, $waitSet->getId());
        $this->assertSame($token, $waitSet->getToken());
        $this->assertSame('f,m,c', $waitSet->getInterests());

        $xml = '<?xml version="1.0"?>'."\n"
            .'<a name="' . $name . '" id="' . $id . '" token="' . $token . '" types="f,m,c" />';
        $this->assertXmlStringEqualsXmlString($xml, $this->serializer->serialize($waitSet, 'xml'));

        $waitSet = $this->serializer->deserialize($xml, 'Zimbra\Struct\WaitSetAddSpec', 'xml');
        $this->assertSame($name, $waitSet->getName());
        $this->assertSame($id, $waitSet->getId());
        $this->assertSame($token, $waitSet->getToken());
        $this->assertSame('f,m,c', $waitSet->getInterests());
    }
}

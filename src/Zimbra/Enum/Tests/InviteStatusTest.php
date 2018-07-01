<?php

namespace Zimbra\Enum\Tests;

use PHPUnit\Framework\TestCase;
use Zimbra\Enum\InviteStatus;

/**
 * Testcase class for InviteStatus.
 */
class InviteStatusTest extends TestCase
{
    public function testInviteStatus()
    {
        $values = [
            'TENTATIVE'  => 'TENT',
            'CONFIRMED'  => 'CONF',
            'CANCELLED'  => 'CANC',
            'COMPLETED'  => 'COMP',
            'INPROGRESS' => 'INPR',
            'WAITING'    => 'WAITING',
            'DEFERRED'   => 'DEFERRED',
        ];
        foreach ($values as $enum => $value)
        {
            $this->assertSame(InviteStatus::$enum()->value(), $value);
        }
    }
}

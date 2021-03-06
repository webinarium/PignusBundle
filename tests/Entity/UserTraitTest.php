<?php

//----------------------------------------------------------------------
//
//  Copyright (C) 2017 Artem Rodygin
//
//  You should have received a copy of the MIT License along with
//  this file. If not, see <http://opensource.org/licenses/MIT>.
//
//----------------------------------------------------------------------

namespace LazySec\Tests\Entity;

use PHPUnit\Framework\TestCase;

class UserTraitTest extends TestCase
{
    public function testPassword()
    {
        $user = new DummyUser();
        self::assertNull($user->getPassword());
    }

    public function testSalt()
    {
        $user = new DummyUser();
        self::assertNull($user->getSalt());
    }

    public function testEraseCredentials()
    {
        $user = new DummyUser();
        $user->eraseCredentials();
        self::assertTrue(true);
    }
}

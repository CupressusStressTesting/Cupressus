<?php

namespace ReenExe\Cupressus\Tests;

use ReenExe\Siege;

class SiegeTest extends \PHPUnit_Framework_TestCase
{
    public function test()
    {
        $siege = new Siege();

        $this->assertSame(
            'https://github.com/CupressusStressTesting/Cupressus/issues/1 GET',
            $siege->convert([
                'https://github.com/CupressusStressTesting/Cupressus/issues/1',
            ])
        );
    }
}

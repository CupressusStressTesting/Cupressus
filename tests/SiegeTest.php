<?php

namespace ReenExe\Cupressus\Tests;

use ReenExe\Siege;

class SiegeTest extends \PHPUnit_Framework_TestCase
{
    public function test()
    {
        $siege = new Siege();

        $this->assertSame('', $siege->convert([]));
    }
}

<?php
use PHPUnit\Framework\TestCase;

class Aku02Test extends TestCase
{
    public function testPushAndPop()
    {
        $a = 1;
        $b = 2;
        $c = $a+$b;
        $this->assertEquals(3, $c);
    }
}
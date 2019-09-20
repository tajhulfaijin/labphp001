<?php

use PHPUnit\Framework\TestCase;

class Aku03Test extends TestCase
{
    public function testPushAndPop()
    {
        $prev = 0;
        for ($i = 1; $i <= 1000000; $i++) {
            $this->assertGreaterThan($prev, $i); // should be passed if current index > prev value
            $prev = $i;
        }
    }
}

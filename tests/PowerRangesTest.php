<?php

namespace UnicodeRanges\Tests;

use UnicodeRanges\PowerRanges;
use PHPUnit\Framework\TestCase;

class PowerRangesTest extends TestCase
{
    /**
     * @test
     */
    public function count_ranges()
    {
        $ranges = (new PowerRanges)->ranges();

        $this->assertEquals(255, count($ranges));
    }
}

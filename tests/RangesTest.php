<?php

namespace UnicodeRanges\Tests;

use UnicodeRanges\Ranges;
use PHPUnit\Framework\TestCase;

class RangesTest extends TestCase
{
    /**
     * @test
     */
    public function count_ranges()
    {
        $ranges = (new Ranges)->all();

        $this->assertEquals(255, count($ranges));
    }
}

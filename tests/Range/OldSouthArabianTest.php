<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\OldSouthArabian;

class OldSouthArabianTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new OldSouthArabian;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Old South Arabian', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('10A60', $range[0]);
		$this->assertEquals('10A7F', $range[1]);
	}
}

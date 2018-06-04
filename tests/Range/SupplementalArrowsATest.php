<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\SupplementalArrowsA;

class SupplementalArrowsATest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new SupplementalArrowsA;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Supplemental Arrows-A', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('27F0', $range[0]);
		$this->assertEquals('27FF', $range[1]);
	}
}

<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\SupplementalArrowsB;

class SupplementalArrowsBTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new SupplementalArrowsB;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Supplemental Arrows-B', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('2900', $range[0]);
		$this->assertEquals('297F', $range[1]);
	}
}

<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\YiRadicals;

class YiRadicalsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new YiRadicals;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Yi Radicals', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('A490', $range[0]);
		$this->assertEquals('A4CF', $range[1]);
	}
}

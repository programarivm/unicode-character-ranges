<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\KangxiRadicals;

class KangxiRadicalsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new KangxiRadicals;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Kangxi Radicals', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('2F00', $range[0]);
		$this->assertEquals('2FDF', $range[1]);
	}
}

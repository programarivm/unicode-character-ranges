<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Cuneiform;

class CuneiformTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Cuneiform;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Cuneiform', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('12000', $range[0]);
		$this->assertEquals('123FF', $range[1]);
	}
}

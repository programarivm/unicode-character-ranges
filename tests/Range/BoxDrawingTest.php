<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\BoxDrawing;

class BoxDrawingTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new BoxDrawing;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Box Drawing', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('2500', $range[0]);
		$this->assertEquals('257F', $range[1]);
	}
}

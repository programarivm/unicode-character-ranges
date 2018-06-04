<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\GeometricShapesExtended;

class GeometricShapesExtendedTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new GeometricShapesExtended;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Geometric Shapes Extended', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1F780', $range[0]);
		$this->assertEquals('1F7FF', $range[1]);
	}
}

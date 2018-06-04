<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\GeometricShapes;

class GeometricShapesTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new GeometricShapes;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Geometric Shapes', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('25A0', $range[0]);
		$this->assertEquals('25FF', $range[1]);
	}
}

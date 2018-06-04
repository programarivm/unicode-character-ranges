<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\GeometricShapesExtended;

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
		$this->assertEquals('Geometric Shapes Extended', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1F780', $range[0]);
		$this->assertEquals('1F7FF', $range[1]);
	}
}

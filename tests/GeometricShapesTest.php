<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\GeometricShapes;

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
		$this->assertEquals('Geometric Shapes', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('25A0', $range['hex'][0]);
		$this->assertEquals('25FF', $range['hex'][1]);
		$this->assertEquals(9632, $range['dec'][0]);
		$this->assertEquals(9727, $range['dec'][1]);
	}
}

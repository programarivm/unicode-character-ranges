<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\BoxDrawing;

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
		$this->assertEquals('Box Drawing', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2500', $range['hex'][0]);
		$this->assertEquals('257F', $range['hex'][1]);
		$this->assertEquals(9472, $range['dec'][0]);
		$this->assertEquals(9599, $range['dec'][1]);
	}
}

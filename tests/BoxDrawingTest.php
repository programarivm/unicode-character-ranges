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

		$this->assertEquals('2500', $range[0]);
		$this->assertEquals('257F', $range[1]);
	}
}

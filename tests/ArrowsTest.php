<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Arrows;

class ArrowsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Arrows;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Arrows', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2190', $range['hex'][0]);
		$this->assertEquals('21FF', $range['hex'][1]);
		$this->assertEquals(8592, $range['dec'][0]);
		$this->assertEquals(8703, $range['dec'][1]);
	}
}

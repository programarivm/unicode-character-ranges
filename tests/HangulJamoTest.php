<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\HangulJamo;

class HangulJamoTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new HangulJamo;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Hangul Jamo', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1100', $range['hex'][0]);
		$this->assertEquals('11FF', $range['hex'][1]);
		$this->assertEquals(4352, $range['dec'][0]);
		$this->assertEquals(4607, $range['dec'][1]);
	}
}

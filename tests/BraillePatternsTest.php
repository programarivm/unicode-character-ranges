<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\BraillePatterns;

class BraillePatternsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new BraillePatterns;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Braille Patterns', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2800', $range['hex'][0]);
		$this->assertEquals('28FF', $range['hex'][1]);
		$this->assertEquals(10240, $range['dec'][0]);
		$this->assertEquals(10495, $range['dec'][1]);
	}
}

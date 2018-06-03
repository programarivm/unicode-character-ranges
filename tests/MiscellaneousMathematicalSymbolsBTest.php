<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\MiscellaneousMathematicalSymbolsB;

class MiscellaneousMathematicalSymbolsBTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new MiscellaneousMathematicalSymbolsB;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Miscellaneous Mathematical Symbols-B', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2980', $range['hex'][0]);
		$this->assertEquals('29FF', $range['hex'][1]);
		$this->assertEquals(10624, $range['dec'][0]);
		$this->assertEquals(10751, $range['dec'][1]);
	}
}

<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\CombiningDiacriticalMarksForSymbols;

class CombiningDiacriticalMarksForSymbolsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CombiningDiacriticalMarksForSymbols;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Combining Diacritical Marks for Symbols', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('20D0', $range['hex'][0]);
		$this->assertEquals('20FF', $range['hex'][1]);
		$this->assertEquals(8400, $range['dec'][0]);
		$this->assertEquals(8447, $range['dec'][1]);
	}
}

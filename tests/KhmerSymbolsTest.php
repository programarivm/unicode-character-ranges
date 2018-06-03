<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\KhmerSymbols;

class KhmerSymbolsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new KhmerSymbols;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Khmer Symbols', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('19E0', $range['hex'][0]);
		$this->assertEquals('19FF', $range['hex'][1]);
		$this->assertEquals(6624, $range['dec'][0]);
		$this->assertEquals(6655, $range['dec'][1]);
	}
}

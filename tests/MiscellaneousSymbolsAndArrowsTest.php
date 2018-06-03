<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\MiscellaneousSymbolsAndArrows;

class MiscellaneousSymbolsAndArrowsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new MiscellaneousSymbolsAndArrows;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Miscellaneous Symbols and Arrows', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2B00', $range['hex'][0]);
		$this->assertEquals('2BFF', $range['hex'][1]);
		$this->assertEquals(11008, $range['dec'][0]);
		$this->assertEquals(11263, $range['dec'][1]);
	}
}

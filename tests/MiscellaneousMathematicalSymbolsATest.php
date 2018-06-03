<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\MiscellaneousMathematicalSymbolsA;

class MiscellaneousMathematicalSymbolsATest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new MiscellaneousMathematicalSymbolsA;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Miscellaneous Mathematical Symbols-A', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('27C0', $range[0]);
		$this->assertEquals('27EF', $range[1]);
	}
}

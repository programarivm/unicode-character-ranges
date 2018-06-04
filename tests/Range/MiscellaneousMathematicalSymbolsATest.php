<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\MiscellaneousMathematicalSymbolsA;

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
		$this->assertEquals('Miscellaneous Mathematical Symbols-A', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('27C0', $range[0]);
		$this->assertEquals('27EF', $range[1]);
	}
}

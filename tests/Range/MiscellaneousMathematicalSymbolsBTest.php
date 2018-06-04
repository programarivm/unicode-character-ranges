<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\MiscellaneousMathematicalSymbolsB;

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
		$this->assertEquals('Miscellaneous Mathematical Symbols-B', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('2980', $range[0]);
		$this->assertEquals('29FF', $range[1]);
	}
}

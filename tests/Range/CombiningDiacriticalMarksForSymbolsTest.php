<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\CombiningDiacriticalMarksForSymbols;

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
		$this->assertEquals('Combining Diacritical Marks for Symbols', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('20D0', $range[0]);
		$this->assertEquals('20FF', $range[1]);
	}
}

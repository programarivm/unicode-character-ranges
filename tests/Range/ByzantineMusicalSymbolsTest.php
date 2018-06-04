<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\ByzantineMusicalSymbols;

class ByzantineMusicalSymbolsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new ByzantineMusicalSymbols;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Byzantine Musical Symbols', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1D000', $range[0]);
		$this->assertEquals('1D0FF', $range[1]);
	}
}

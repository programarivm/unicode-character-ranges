<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\MusicalSymbols;

class MusicalSymbolsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new MusicalSymbols;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Musical Symbols', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1D100', $range[0]);
		$this->assertEquals('1D1FF', $range[1]);
	}
}

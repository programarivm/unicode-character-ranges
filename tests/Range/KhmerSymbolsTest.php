<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\KhmerSymbols;

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
		$this->assertEquals('Khmer Symbols', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('19E0', $range[0]);
		$this->assertEquals('19FF', $range[1]);
	}
}

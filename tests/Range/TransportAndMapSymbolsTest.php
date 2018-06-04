<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\TransportAndMapSymbols;

class TransportAndMapSymbolsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new TransportAndMapSymbols;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Transport and Map Symbols', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1F680', $range[0]);
		$this->assertEquals('1F6FF', $range[1]);
	}
}

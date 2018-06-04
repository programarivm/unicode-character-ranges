<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\TransportAndMapSymbols;

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
		$this->assertEquals('Transport and Map Symbols', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1F680', $range[0]);
		$this->assertEquals('1F6FF', $range[1]);
	}
}

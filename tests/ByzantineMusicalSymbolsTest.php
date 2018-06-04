<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\ByzantineMusicalSymbols;

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
		$this->assertEquals('Byzantine Musical Symbols', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1D000', $range[0]);
		$this->assertEquals('1D0FF', $range[1]);
	}
}

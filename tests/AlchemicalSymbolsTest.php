<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\AlchemicalSymbols;

class AlchemicalSymbolsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new AlchemicalSymbols;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Alchemical Symbols', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1F700', $range[0]);
		$this->assertEquals('1F77F', $range[1]);
	}
}

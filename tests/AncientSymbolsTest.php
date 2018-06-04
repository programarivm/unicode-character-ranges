<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\AncientSymbols;

class AncientSymbolsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new AncientSymbols;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Ancient Symbols', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('10190', $range[0]);
		$this->assertEquals('101CF', $range[1]);
	}
}

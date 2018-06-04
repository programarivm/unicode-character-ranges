<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\TaiXuanJingSymbols;

class TaiXuanJingSymbolsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new TaiXuanJingSymbols;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Tai Xuan Jing Symbols', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1D300', $range[0]);
		$this->assertEquals('1D35F', $range[1]);
	}
}

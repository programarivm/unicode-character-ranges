<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\AncientSymbols;

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
		$this->assertEquals('Ancient Symbols', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('10190', $range[0]);
		$this->assertEquals('101CF', $range[1]);
	}

	/**
	 * @test
	 */
	public function get_keywords()
	{
		$keywords = $this->charRange->keywords();

		$expected = [
			'roman',
			'currency',
			'weight',
			'measure',
			'dead',
		];

		$this->assertTrue($expected == $keywords);
	}
}

<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\AlchemicalSymbols;

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
		$this->assertEquals('Alchemical Symbols', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1F700', $range[0]);
		$this->assertEquals('1F77F', $range[1]);
	}

	/**
	 * @test
	 */
	public function get_keywords()
	{
		$keywords = $this->charRange->keywords();

		$expected = [
			'alchemical',
			'alchemy',
			'chemical',
			'chemistry',
			'ancient',
			'medieval',
		];

		$this->assertTrue($expected == $keywords);
	}
}

<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\LetterlikeSymbols;

class LetterlikeSymbolsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new LetterlikeSymbols;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Letterlike Symbols', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('2100', $range[0]);
		$this->assertEquals('214F', $range[1]);
	}
}

<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\CJKSymbolsAndPunctuation;

class CJKSymbolsAndPunctuationTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CJKSymbolsAndPunctuation;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('CJK Symbols and Punctuation', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('3000', $range[0]);
		$this->assertEquals('303F', $range[1]);
	}
}

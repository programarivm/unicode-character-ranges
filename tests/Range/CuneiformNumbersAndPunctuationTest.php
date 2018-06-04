<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\CuneiformNumbersAndPunctuation;

class CuneiformNumbersAndPunctuationTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CuneiformNumbersAndPunctuation;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Cuneiform Numbers and Punctuation', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('12400', $range[0]);
		$this->assertEquals('1247F', $range[1]);
	}
}

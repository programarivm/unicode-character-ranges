<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\CuneiformNumbersAndPunctuation;

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
		$this->assertEquals('Cuneiform Numbers and Punctuation', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('12400', $range[0]);
		$this->assertEquals('1247F', $range[1]);
	}
}

<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\SupplementalSymbolsAndPictographs;

class SupplementalSymbolsAndPictographsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new SupplementalSymbolsAndPictographs;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Supplemental Symbols and Pictographs', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1F900', $range[0]);
		$this->assertEquals('1F9FF', $range[1]);
	}
}

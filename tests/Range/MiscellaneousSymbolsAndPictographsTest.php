<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\MiscellaneousSymbolsAndPictographs;

class MiscellaneousSymbolsAndPictographsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new MiscellaneousSymbolsAndPictographs;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Miscellaneous Symbols and Pictographs', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1F300', $range[0]);
		$this->assertEquals('1F5FF', $range[1]);
	}
}

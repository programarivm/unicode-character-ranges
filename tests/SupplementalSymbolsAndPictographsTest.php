<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\SupplementalSymbolsAndPictographs;

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
		$this->assertEquals('Supplemental Symbols and Pictographs', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1F900', $range[0]);
		$this->assertEquals('1F9FF', $range[1]);
	}
}

<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\CJKCompatibilityIdeographs;

class CJKCompatibilityIdeographsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CJKCompatibilityIdeographs;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('CJK Compatibility Ideographs', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('F900', $range[0]);
		$this->assertEquals('FAFF', $range[1]);
	}
}

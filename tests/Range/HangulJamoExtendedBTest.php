<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\HangulJamoExtendedB;

class HangulJamoExtendedBTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new HangulJamoExtendedB;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Hangul Jamo Extended-B', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('D7B0', $range[0]);
		$this->assertEquals('D7FF', $range[1]);
	}
}

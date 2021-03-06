<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\HangulJamoExtendedA;

class HangulJamoExtendedATest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new HangulJamoExtendedA;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Hangul Jamo Extended-A', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('A960', $range[0]);
		$this->assertEquals('A97F', $range[1]);
	}
}

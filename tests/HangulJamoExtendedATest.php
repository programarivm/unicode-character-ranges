<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\HangulJamoExtendedA;

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
		$this->assertEquals('Hangul Jamo Extended-A', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('A960', $range[0]);
		$this->assertEquals('A97F', $range[1]);
	}
}

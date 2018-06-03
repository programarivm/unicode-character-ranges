<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\HangulJamo;

class HangulJamoTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new HangulJamo;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Hangul Jamo', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1100', $range[0]);
		$this->assertEquals('11FF', $range[1]);
	}
}

<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\HangulJamo;

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
		$this->assertEquals('Hangul Jamo', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1100', $range[0]);
		$this->assertEquals('11FF', $range[1]);
	}
}

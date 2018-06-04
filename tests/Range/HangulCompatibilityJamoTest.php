<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\HangulCompatibilityJamo;

class HangulCompatibilityJamoTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new HangulCompatibilityJamo;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Hangul Compatibility Jamo', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('3130', $range[0]);
		$this->assertEquals('318F', $range[1]);
	}
}

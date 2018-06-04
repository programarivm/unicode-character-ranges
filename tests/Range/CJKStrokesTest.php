<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\CJKStrokes;

class CJKStrokesTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CJKStrokes;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('CJK Strokes', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('31C0', $range[0]);
		$this->assertEquals('31EF', $range[1]);
	}
}

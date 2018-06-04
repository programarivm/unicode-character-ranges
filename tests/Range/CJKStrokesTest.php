<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\CJKStrokes;

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
		$this->assertEquals('CJK Strokes', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('31C0', $range[0]);
		$this->assertEquals('31EF', $range[1]);
	}
}

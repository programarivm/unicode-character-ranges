<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\CombiningHalfMarks;

class CombiningHalfMarksTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CombiningHalfMarks;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Combining Half Marks', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('FE20', $range[0]);
		$this->assertEquals('FE2F', $range[1]);
	}
}

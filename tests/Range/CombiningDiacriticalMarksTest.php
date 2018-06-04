<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\CombiningDiacriticalMarks;

class CombiningDiacriticalMarksTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CombiningDiacriticalMarks;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Combining Diacritical Marks', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('0300', $range[0]);
		$this->assertEquals('036F', $range[1]);
	}
}

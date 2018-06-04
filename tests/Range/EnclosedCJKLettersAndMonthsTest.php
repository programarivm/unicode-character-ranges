<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\EnclosedCJKLettersAndMonths;

class EnclosedCJKLettersAndMonthsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new EnclosedCJKLettersAndMonths;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Enclosed CJK Letters and Months', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('3200', $range[0]);
		$this->assertEquals('32FF', $range[1]);
	}
}

<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\EnclosedCJKLettersAndMonths;

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
		$this->assertEquals('Enclosed CJK Letters and Months', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('3200', $range[0]);
		$this->assertEquals('32FF', $range[1]);
	}
}

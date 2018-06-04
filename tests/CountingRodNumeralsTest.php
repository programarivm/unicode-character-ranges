<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\CountingRodNumerals;

class CountingRodNumeralsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CountingRodNumerals;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Counting Rod Numerals', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1D360', $range[0]);
		$this->assertEquals('1D37F', $range[1]);
	}
}

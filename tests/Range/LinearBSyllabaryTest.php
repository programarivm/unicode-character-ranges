<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\LinearBSyllabary;

class LinearBSyllabaryTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new LinearBSyllabary;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Linear B Syllabary', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('10000', $range[0]);
		$this->assertEquals('1007F', $range[1]);
	}
}

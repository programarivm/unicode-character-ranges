<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\AncientGreekMusicalNotation;

class AncientGreekMusicalNotationTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new AncientGreekMusicalNotation;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Ancient Greek Musical Notation', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1D200', $range[0]);
		$this->assertEquals('1D24F', $range[1]);
	}

	/**
	 * @test
	 */
	public function get_keywords()
	{
		$keywords = $this->charRange->keywords();

		$expected = [];

		$this->assertTrue($expected == $keywords);
	}
}

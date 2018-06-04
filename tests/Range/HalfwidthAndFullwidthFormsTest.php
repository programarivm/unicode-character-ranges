<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\HalfwidthAndFullwidthForms;

class HalfwidthAndFullwidthFormsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new HalfwidthAndFullwidthForms;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Halfwidth and Fullwidth Forms', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('FF00', $range[0]);
		$this->assertEquals('FFEF', $range[1]);
	}
}

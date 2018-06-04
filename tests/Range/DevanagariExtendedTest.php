<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\DevanagariExtended;

class DevanagariExtendedTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new DevanagariExtended;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Devanagari Extended', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('A8E0', $range[0]);
		$this->assertEquals('A8FF', $range[1]);
	}
}

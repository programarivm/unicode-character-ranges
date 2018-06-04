<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Phoenician;

class PhoenicianTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Phoenician;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Phoenician', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('10900', $range[0]);
		$this->assertEquals('1091F', $range[1]);
	}
}

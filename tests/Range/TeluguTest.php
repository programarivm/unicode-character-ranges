<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Telugu;

class TeluguTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Telugu;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Telugu', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('0C00', $range[0]);
		$this->assertEquals('0C7F', $range[1]);
	}
}

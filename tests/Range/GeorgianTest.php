<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Georgian;

class GeorgianTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Georgian;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Georgian', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('10A0', $range[0]);
		$this->assertEquals('10FF', $range[1]);
	}
}

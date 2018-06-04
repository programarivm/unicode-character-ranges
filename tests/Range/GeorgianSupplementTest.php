<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\GeorgianSupplement;

class GeorgianSupplementTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new GeorgianSupplement;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Georgian Supplement', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('2D00', $range[0]);
		$this->assertEquals('2D2F', $range[1]);
	}
}

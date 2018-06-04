<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Gothic;

class GothicTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Gothic;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Gothic', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('10330', $range[0]);
		$this->assertEquals('1034F', $range[1]);
	}
}

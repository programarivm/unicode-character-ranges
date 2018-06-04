<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\LinearA;

class LinearATest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new LinearA;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Linear A', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('10600', $range[0]);
		$this->assertEquals('1077F', $range[1]);
	}
}

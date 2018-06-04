<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Batak;

class BatakTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Batak;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Batak', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1BC0', $range[0]);
		$this->assertEquals('1BFF', $range[1]);
	}
}

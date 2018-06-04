<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Thai;

class ThaiTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Thai;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Thai', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('0E00', $range[0]);
		$this->assertEquals('0E7F', $range[1]);
	}
}

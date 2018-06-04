<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Arrows;

class ArrowsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Arrows;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Arrows', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('2190', $range[0]);
		$this->assertEquals('21FF', $range[1]);
	}
}

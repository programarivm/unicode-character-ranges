<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Tifinagh;

class TifinaghTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Tifinagh;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Tifinagh', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('2D30', $range[0]);
		$this->assertEquals('2D7F', $range[1]);
	}
}

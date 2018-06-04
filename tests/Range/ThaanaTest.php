<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Thaana;

class ThaanaTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Thaana;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Thaana', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('0780', $range[0]);
		$this->assertEquals('07BF', $range[1]);
	}
}

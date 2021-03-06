<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\SundaneseSupplement;

class SundaneseSupplementTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new SundaneseSupplement;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Sundanese Supplement', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1CC0', $range[0]);
		$this->assertEquals('1CCF', $range[1]);
	}
}

<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Myanmar;

class MyanmarTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Myanmar;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Myanmar', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1000', $range[0]);
		$this->assertEquals('109F', $range[1]);
	}
}

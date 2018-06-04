<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\NewTaiLue;

class NewTaiLueTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new NewTaiLue;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('New Tai Lue', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1980', $range[0]);
		$this->assertEquals('19DF', $range[1]);
	}
}

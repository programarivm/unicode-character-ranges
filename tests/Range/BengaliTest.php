<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Bengali;

class BengaliTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Bengali;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Bengali', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('0980', $range[0]);
		$this->assertEquals('09FF', $range[1]);
	}
}

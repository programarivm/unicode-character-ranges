<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Hebrew;

class HebrewTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Hebrew;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Hebrew', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('0590', $range[0]);
		$this->assertEquals('05FF', $range[1]);
	}
}

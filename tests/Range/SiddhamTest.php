<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Siddham;

class SiddhamTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Siddham;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Siddham', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('11580', $range[0]);
		$this->assertEquals('115FF', $range[1]);
	}
}

<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\TaiTham;

class TaiThamTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new TaiTham;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Tai Tham', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1A20', $range[0]);
		$this->assertEquals('1AAF', $range[1]);
	}
}

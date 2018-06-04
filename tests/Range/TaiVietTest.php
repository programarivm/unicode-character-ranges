<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\TaiViet;

class TaiVietTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new TaiViet;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Tai Viet', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('AA80', $range[0]);
		$this->assertEquals('AADF', $range[1]);
	}
}

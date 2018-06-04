<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Khmer;

class KhmerTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Khmer;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Khmer', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1780', $range[0]);
		$this->assertEquals('17FF', $range[1]);
	}
}

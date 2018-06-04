<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Khudawadi;

class KhudawadiTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Khudawadi;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Khudawadi', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('112B0', $range[0]);
		$this->assertEquals('112FF', $range[1]);
	}
}

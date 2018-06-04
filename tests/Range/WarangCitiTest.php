<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\WarangCiti;

class WarangCitiTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new WarangCiti;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Warang Citi', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('118A0', $range[0]);
		$this->assertEquals('118FF', $range[1]);
	}
}

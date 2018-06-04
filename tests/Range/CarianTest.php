<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Carian;

class CarianTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Carian;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Carian', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('102A0', $range[0]);
		$this->assertEquals('102DF', $range[1]);
	}
}

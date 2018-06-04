<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\PhaistosDisc;

class PhaistosDiscTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new PhaistosDisc;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Phaistos Disc', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('101D0', $range[0]);
		$this->assertEquals('101FF', $range[1]);
	}
}

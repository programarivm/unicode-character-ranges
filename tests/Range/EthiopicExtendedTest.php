<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\EthiopicExtended;

class EthiopicExtendedTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new EthiopicExtended;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Ethiopic Extended', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('2D80', $range[0]);
		$this->assertEquals('2DDF', $range[1]);
	}
}

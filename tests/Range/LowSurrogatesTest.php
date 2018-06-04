<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\LowSurrogates;

class LowSurrogatesTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new LowSurrogates;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Low Surrogates', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('DC00', $range[0]);
		$this->assertEquals('DFFF', $range[1]);
	}
}

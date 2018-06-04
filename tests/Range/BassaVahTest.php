<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\BassaVah;

class BassaVahTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new BassaVah;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Bassa Vah', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('16AD0', $range[0]);
		$this->assertEquals('16AFF', $range[1]);
	}
}

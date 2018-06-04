<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\PauCinHau;

class PauCinHauTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new PauCinHau;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Pau Cin Hau', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('11AC0', $range[0]);
		$this->assertEquals('11AFF', $range[1]);
	}
}

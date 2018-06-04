<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Cherokee;

class CherokeeTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Cherokee;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Cherokee', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('13A0', $range[0]);
		$this->assertEquals('13FF', $range[1]);
	}
}

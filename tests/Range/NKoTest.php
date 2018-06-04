<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\NKo;

class NKoTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new NKo;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('NKo', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('07C0', $range[0]);
		$this->assertEquals('07FF', $range[1]);
	}
}

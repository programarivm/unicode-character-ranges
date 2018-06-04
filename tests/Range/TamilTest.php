<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Tamil;

class TamilTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Tamil;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Tamil', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('0B80', $range[0]);
		$this->assertEquals('0BFF', $range[1]);
	}
}

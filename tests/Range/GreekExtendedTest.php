<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\GreekExtended;

class GreekExtendedTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new GreekExtended;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Greek Extended', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1F00', $range[0]);
		$this->assertEquals('1FFF', $range[1]);
	}
}

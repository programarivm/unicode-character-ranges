<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\PrivateUseArea;

class PrivateUseAreaTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new PrivateUseArea;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Private Use Area', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('E000', $range[0]);
		$this->assertEquals('F8FF', $range[1]);
	}
}

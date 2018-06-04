<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\SylotiNagri;

class SylotiNagriTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new SylotiNagri;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Syloti Nagri', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('A800', $range[0]);
		$this->assertEquals('A82F', $range[1]);
	}
}

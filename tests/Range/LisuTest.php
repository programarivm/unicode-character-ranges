<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Lisu;

class LisuTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Lisu;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Lisu', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('A4D0', $range[0]);
		$this->assertEquals('A4FF', $range[1]);
	}
}

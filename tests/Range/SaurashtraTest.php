<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Saurashtra;

class SaurashtraTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Saurashtra;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Saurashtra', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('A880', $range[0]);
		$this->assertEquals('A8DF', $range[1]);
	}
}

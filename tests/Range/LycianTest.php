<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Lycian;

class LycianTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Lycian;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Lycian', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('10280', $range[0]);
		$this->assertEquals('1029F', $range[1]);
	}
}

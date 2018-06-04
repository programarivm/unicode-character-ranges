<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\MeroiticCursive;

class MeroiticCursiveTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new MeroiticCursive;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Meroitic Cursive', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('109A0', $range[0]);
		$this->assertEquals('109FF', $range[1]);
	}
}

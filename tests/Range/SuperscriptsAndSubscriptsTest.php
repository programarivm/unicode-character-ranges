<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\SuperscriptsAndSubscripts;

class SuperscriptsAndSubscriptsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new SuperscriptsAndSubscripts;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Superscripts and Subscripts', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('2070', $range[0]);
		$this->assertEquals('209F', $range[1]);
	}
}

<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\BasicLatin;

class BasicLatinTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new BasicLatin;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Basic Latin', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('0020', $range[0]);
		$this->assertEquals('007F', $range[1]);
	}
}

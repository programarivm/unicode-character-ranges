<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\CJKUnifiedIdeographs;

class CJKUnifiedIdeographsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CJKUnifiedIdeographs;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('CJK Unified Ideographs', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('4E00', $range[0]);
		$this->assertEquals('9FFF', $range[1]);
	}
}

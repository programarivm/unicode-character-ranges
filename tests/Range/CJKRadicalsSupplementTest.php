<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\CJKRadicalsSupplement;

class CJKRadicalsSupplementTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CJKRadicalsSupplement;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('CJK Radicals Supplement', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('2E80', $range[0]);
		$this->assertEquals('2EFF', $range[1]);
	}
}

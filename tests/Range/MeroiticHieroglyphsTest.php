<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\MeroiticHieroglyphs;

class MeroiticHieroglyphsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new MeroiticHieroglyphs;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Meroitic Hieroglyphs', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('10980', $range[0]);
		$this->assertEquals('1099F', $range[1]);
	}
}

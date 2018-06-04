<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\AnatolianHieroglyphs;

class AnatolianHieroglyphsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new AnatolianHieroglyphs;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Anatolian Hieroglyphs', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('14400', $range[0]);
		$this->assertEquals('1467F', $range[1]);
	}
}

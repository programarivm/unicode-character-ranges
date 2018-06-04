<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\MeroiticHieroglyphs;

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
		$this->assertEquals('Meroitic Hieroglyphs', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('10980', $range[0]);
		$this->assertEquals('1099F', $range[1]);
	}
}

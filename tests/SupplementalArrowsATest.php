<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\SupplementalArrowsA;

class SupplementalArrowsATest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new SupplementalArrowsA;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Supplemental Arrows-A', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('27F0', $range['hex'][0]);
		$this->assertEquals('27FF', $range['hex'][1]);
		$this->assertEquals(10224, $range['dec'][0]);
		$this->assertEquals(10239, $range['dec'][1]);
	}
}

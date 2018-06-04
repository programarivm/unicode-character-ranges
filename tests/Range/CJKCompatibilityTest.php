<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\CJKCompatibility;

class CJKCompatibilityTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CJKCompatibility;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('CJK Compatibility', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('3300', $range[0]);
		$this->assertEquals('33FF', $range[1]);
	}
}

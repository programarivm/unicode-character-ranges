<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\YiRadicals;

class YiRadicalsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new YiRadicals;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Yi Radicals', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('A490', $range[0]);
		$this->assertEquals('A4CF', $range[1]);
	}
}

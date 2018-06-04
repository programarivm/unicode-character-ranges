<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\KangxiRadicals;

class KangxiRadicalsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new KangxiRadicals;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Kangxi Radicals', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2F00', $range[0]);
		$this->assertEquals('2FDF', $range[1]);
	}
}

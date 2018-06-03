<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\BasicLatin;

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
		$this->assertEquals('Basic Latin', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0020', $range['hex'][0]);
		$this->assertEquals('007F', $range['hex'][1]);
		$this->assertEquals(32, $range['dec'][0]);
		$this->assertEquals(127, $range['dec'][1]);
	}
}

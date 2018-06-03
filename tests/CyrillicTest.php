<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Cyrillic;

class CyrillicTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Cyrillic;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Cyrillic', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0400', $range['hex'][0]);
		$this->assertEquals('04FF', $range['hex'][1]);
		$this->assertEquals(1024, $range['dec'][0]);
		$this->assertEquals(1279, $range['dec'][1]);
	}
}

<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Thaana;

class ThaanaTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Thaana;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Thaana', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0780', $range['hex'][0]);
		$this->assertEquals('07BF', $range['hex'][1]);
		$this->assertEquals(1920, $range['dec'][0]);
		$this->assertEquals(1983, $range['dec'][1]);
	}
}

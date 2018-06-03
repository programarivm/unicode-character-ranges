<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Balinese;

class BalineseTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Balinese;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Balinese', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1B00', $range['hex'][0]);
		$this->assertEquals('1B7F', $range['hex'][1]);
		$this->assertEquals(6912, $range['dec'][0]);
		$this->assertEquals(7039, $range['dec'][1]);
	}
}

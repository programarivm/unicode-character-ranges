<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Hanunoo;

class HanunooTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Hanunoo;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Hanunoo', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1720', $range['hex'][0]);
		$this->assertEquals('173F', $range['hex'][1]);
		$this->assertEquals(5920, $range['dec'][0]);
		$this->assertEquals(5951, $range['dec'][1]);
	}
}

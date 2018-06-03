<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\NumberForms;

class NumberFormsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new NumberForms;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Number Forms', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2150', $range['hex'][0]);
		$this->assertEquals('218F', $range['hex'][1]);
		$this->assertEquals(8528, $range['dec'][0]);
		$this->assertEquals(8591, $range['dec'][1]);
	}
}

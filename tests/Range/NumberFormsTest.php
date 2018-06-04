<?php

namespace UnicodeCharacterRanges\Range\Tests;

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

		$this->assertEquals('2150', $range[0]);
		$this->assertEquals('218F', $range[1]);
	}
}

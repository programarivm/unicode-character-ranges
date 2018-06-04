<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\CommonIndicNumberForms;

class CommonIndicNumberFormsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CommonIndicNumberForms;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Common Indic Number Forms', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('A830', $range[0]);
		$this->assertEquals('A83F', $range[1]);
	}
}

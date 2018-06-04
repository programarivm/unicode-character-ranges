<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\CommonIndicNumberForms;

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
		$this->assertEquals('Common Indic Number Forms', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('A830', $range[0]);
		$this->assertEquals('A83F', $range[1]);
	}
}

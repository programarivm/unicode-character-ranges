<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\CJKCompatibilityForms;

class CJKCompatibilityFormsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CJKCompatibilityForms;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('CJK Compatibility Forms', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('FE30', $range[0]);
		$this->assertEquals('FE4F', $range[1]);
	}
}

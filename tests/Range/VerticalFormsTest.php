<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\VerticalForms;

class VerticalFormsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new VerticalForms;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Vertical Forms', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('FE10', $range[0]);
		$this->assertEquals('FE1F', $range[1]);
	}
}

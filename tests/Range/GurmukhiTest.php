<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Gurmukhi;

class GurmukhiTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Gurmukhi;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Gurmukhi', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('0A00', $range[0]);
		$this->assertEquals('0A7F', $range[1]);
	}
}

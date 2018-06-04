<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\LinearBIdeograms;

class LinearBIdeogramsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new LinearBIdeograms;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Linear B Ideograms', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('10080', $range[0]);
		$this->assertEquals('100FF', $range[1]);
	}
}

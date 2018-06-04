<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\SuttonSignWriting;

class SuttonSignWritingTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new SuttonSignWriting;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Sutton Sign Writing', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1D800', $range[0]);
		$this->assertEquals('1DAAF', $range[1]);
	}
}

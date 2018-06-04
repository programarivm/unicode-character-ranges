<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Bamum;

class BamumTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Bamum;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Bamum', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('A6A0', $range[0]);
		$this->assertEquals('A6FF', $range[1]);
	}
}

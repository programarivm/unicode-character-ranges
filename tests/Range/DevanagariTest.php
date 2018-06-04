<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Devanagari;

class DevanagariTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Devanagari;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Devanagari', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('0900', $range[0]);
		$this->assertEquals('097F', $range[1]);
	}
}

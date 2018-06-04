<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Takri;

class TakriTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Takri;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Takri', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('11680', $range[0]);
		$this->assertEquals('116CF', $range[1]);
	}
}

<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Specials;

class SpecialsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Specials;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Specials', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('FFF0', $range[0]);
		$this->assertEquals('FFFF', $range[1]);
	}
}

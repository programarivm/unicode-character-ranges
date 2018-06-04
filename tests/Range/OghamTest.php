<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Ogham;

class OghamTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Ogham;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Ogham', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1680', $range[0]);
		$this->assertEquals('169F', $range[1]);
	}
}

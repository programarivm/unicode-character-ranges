<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Mongolian;

class MongolianTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Mongolian;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Mongolian', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1800', $range[0]);
		$this->assertEquals('18AF', $range[1]);
	}
}

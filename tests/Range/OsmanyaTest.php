<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Osmanya;

class OsmanyaTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Osmanya;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Osmanya', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('10480', $range[0]);
		$this->assertEquals('104AF', $range[1]);
	}
}

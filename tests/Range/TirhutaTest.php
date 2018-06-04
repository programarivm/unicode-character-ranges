<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Tirhuta;

class TirhutaTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Tirhuta;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Tirhuta', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('11480', $range[0]);
		$this->assertEquals('114DF', $range[1]);
	}
}

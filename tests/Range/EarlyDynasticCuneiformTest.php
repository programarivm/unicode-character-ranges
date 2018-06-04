<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\EarlyDynasticCuneiform;

class EarlyDynasticCuneiformTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new EarlyDynasticCuneiform;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Early Dynastic Cuneiform', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('12480', $range[0]);
		$this->assertEquals('1254F', $range[1]);
	}
}

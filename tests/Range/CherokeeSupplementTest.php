<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\CherokeeSupplement;

class CherokeeSupplementTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CherokeeSupplement;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Cherokee Supplement', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('AB70', $range[0]);
		$this->assertEquals('ABBF', $range[1]);
	}
}

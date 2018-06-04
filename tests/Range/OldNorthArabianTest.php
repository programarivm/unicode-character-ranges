<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\OldNorthArabian;

class OldNorthArabianTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new OldNorthArabian;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Old North Arabian', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('10A80', $range[0]);
		$this->assertEquals('10A9F', $range[1]);
	}
}

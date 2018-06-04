<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Kaithi;

class KaithiTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Kaithi;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Kaithi', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('11080', $range[0]);
		$this->assertEquals('110CF', $range[1]);
	}
}

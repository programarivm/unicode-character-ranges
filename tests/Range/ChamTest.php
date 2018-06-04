<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Cham;

class ChamTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Cham;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Cham', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('AA00', $range[0]);
		$this->assertEquals('AA5F', $range[1]);
	}
}

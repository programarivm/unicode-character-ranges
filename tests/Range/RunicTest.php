<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Runic;

class RunicTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Runic;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Runic', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('16A0', $range[0]);
		$this->assertEquals('16FF', $range[1]);
	}
}

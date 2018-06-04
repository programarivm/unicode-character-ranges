<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Sinhala;

class SinhalaTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Sinhala;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Sinhala', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('0D80', $range[0]);
		$this->assertEquals('0DFF', $range[1]);
	}
}

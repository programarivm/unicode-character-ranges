<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Bopomofo;

class BopomofoTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Bopomofo;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Bopomofo', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('3100', $range[0]);
		$this->assertEquals('312F', $range[1]);
	}
}

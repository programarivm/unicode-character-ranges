<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Elbasan;

class ElbasanTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Elbasan;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Elbasan', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('10500', $range[0]);
		$this->assertEquals('1052F', $range[1]);
	}
}

<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Grantha;

class GranthaTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Grantha;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Grantha', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('11300', $range[0]);
		$this->assertEquals('1137F', $range[1]);
	}
}

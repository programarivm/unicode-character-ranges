<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Buhid;

class BuhidTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Buhid;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Buhid', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1740', $range[0]);
		$this->assertEquals('175F', $range[1]);
	}
}

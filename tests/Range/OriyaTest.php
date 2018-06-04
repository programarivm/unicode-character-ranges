<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Oriya;

class OriyaTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Oriya;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Oriya', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('0B00', $range[0]);
		$this->assertEquals('0B7F', $range[1]);
	}
}

<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Malayalam;

class MalayalamTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Malayalam;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Malayalam', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('0D00', $range[0]);
		$this->assertEquals('0D7F', $range[1]);
	}
}

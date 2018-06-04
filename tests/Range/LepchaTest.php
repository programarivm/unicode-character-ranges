<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Lepcha;

class LepchaTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Lepcha;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Lepcha', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1C00', $range[0]);
		$this->assertEquals('1C4F', $range[1]);
	}
}

<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Shavian;

class ShavianTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Shavian;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Shavian', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('10450', $range[0]);
		$this->assertEquals('1047F', $range[1]);
	}
}

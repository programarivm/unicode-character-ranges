<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Limbu;

class LimbuTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Limbu;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Limbu', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1900', $range[0]);
		$this->assertEquals('194F', $range[1]);
	}
}

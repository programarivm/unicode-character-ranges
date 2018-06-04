<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\HighSurrogates;

class HighSurrogatesTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new HighSurrogates;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('High Surrogates', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('D800', $range[0]);
		$this->assertEquals('DB7F', $range[1]);
	}
}

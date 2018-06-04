<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\EnclosedAlphanumericSupplement;

class EnclosedAlphanumericSupplementTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new EnclosedAlphanumericSupplement;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Enclosed Alphanumeric Supplement', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1F100', $range[0]);
		$this->assertEquals('1F1FF', $range[1]);
	}
}

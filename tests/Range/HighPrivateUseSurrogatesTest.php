<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\HighPrivateUseSurrogates;

class HighPrivateUseSurrogatesTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new HighPrivateUseSurrogates;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('High Private Use Surrogates', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('DB80', $range[0]);
		$this->assertEquals('DBFF', $range[1]);
	}
}

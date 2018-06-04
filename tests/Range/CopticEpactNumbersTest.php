<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\CopticEpactNumbers;

class CopticEpactNumbersTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CopticEpactNumbers;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Coptic Epact Numbers', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('102E0', $range[0]);
		$this->assertEquals('102FF', $range[1]);
	}
}

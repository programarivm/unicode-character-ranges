<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\AncientGreekNumbers;

class AncientGreekNumbersTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new AncientGreekNumbers;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Ancient Greek Numbers', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('10140', $range[0]);
		$this->assertEquals('1018F', $range[1]);
	}
}

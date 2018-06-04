<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\SupplementalMathematicalOperators;

class SupplementalMathematicalOperatorsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new SupplementalMathematicalOperators;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Supplemental Mathematical Operators', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('2A00', $range[0]);
		$this->assertEquals('2AFF', $range[1]);
	}
}

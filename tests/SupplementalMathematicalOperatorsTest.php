<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\SupplementalMathematicalOperators;

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
		$this->assertEquals('Supplemental Mathematical Operators', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2A00', $range['hex'][0]);
		$this->assertEquals('2AFF', $range['hex'][1]);
		$this->assertEquals(10752, $range['dec'][0]);
		$this->assertEquals(11007, $range['dec'][1]);
	}
}

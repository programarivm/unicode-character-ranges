<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\SupplementalArrowsB;

class SupplementalArrowsBTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new SupplementalArrowsB;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Supplemental Arrows-B', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2900', $range[0]);
		$this->assertEquals('297F', $range[1]);
	}
}

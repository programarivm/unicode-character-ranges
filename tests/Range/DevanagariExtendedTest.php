<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\DevanagariExtended;

class DevanagariExtendedTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new DevanagariExtended;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Devanagari Extended', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('A8E0', $range[0]);
		$this->assertEquals('A8FF', $range[1]);
	}
}

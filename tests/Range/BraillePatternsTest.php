<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\BraillePatterns;

class BraillePatternsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new BraillePatterns;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Braille Patterns', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('2800', $range[0]);
		$this->assertEquals('28FF', $range[1]);
	}
}

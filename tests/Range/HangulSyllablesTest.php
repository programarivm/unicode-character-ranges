<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\HangulSyllables;

class HangulSyllablesTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new HangulSyllables;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Hangul Syllables', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('AC00', $range[0]);
		$this->assertEquals('D7AF', $range[1]);
	}
}

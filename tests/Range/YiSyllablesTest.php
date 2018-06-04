<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\YiSyllables;

class YiSyllablesTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new YiSyllables;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Yi Syllables', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('A000', $range[0]);
		$this->assertEquals('A48F', $range[1]);
	}
}

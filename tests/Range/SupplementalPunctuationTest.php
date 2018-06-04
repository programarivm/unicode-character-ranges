<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\SupplementalPunctuation;

class SupplementalPunctuationTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new SupplementalPunctuation;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Supplemental Punctuation', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('2E00', $range[0]);
		$this->assertEquals('2E7F', $range[1]);
	}
}

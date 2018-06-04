<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\GeneralPunctuation;

class GeneralPunctuationTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new GeneralPunctuation;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('General Punctuation', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('2000', $range[0]);
		$this->assertEquals('206F', $range[1]);
	}
}

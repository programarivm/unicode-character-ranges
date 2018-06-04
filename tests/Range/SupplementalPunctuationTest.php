<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\SupplementalPunctuation;

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
		$this->assertEquals('Supplemental Punctuation', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2E00', $range[0]);
		$this->assertEquals('2E7F', $range[1]);
	}
}

<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\GeneralPunctuation;

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
		$this->assertEquals('General Punctuation', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2000', $range[0]);
		$this->assertEquals('206F', $range[1]);
	}
}

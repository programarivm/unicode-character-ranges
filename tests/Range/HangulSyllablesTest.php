<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\HangulSyllables;

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
		$this->assertEquals('Hangul Syllables', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('AC00', $range[0]);
		$this->assertEquals('D7AF', $range[1]);
	}
}

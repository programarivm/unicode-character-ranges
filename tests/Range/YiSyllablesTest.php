<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\YiSyllables;

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
		$this->assertEquals('Yi Syllables', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('A000', $range[0]);
		$this->assertEquals('A48F', $range[1]);
	}
}

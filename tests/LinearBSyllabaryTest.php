<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\LinearBSyllabary;

class LinearBSyllabaryTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new LinearBSyllabary;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Linear B Syllabary', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('10000', $range[0]);
		$this->assertEquals('1007F', $range[1]);
	}
}

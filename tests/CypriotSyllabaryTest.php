<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\CypriotSyllabary;

class CypriotSyllabaryTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CypriotSyllabary;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Cypriot Syllabary', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('10800', $range[0]);
		$this->assertEquals('1083F', $range[1]);
	}
}

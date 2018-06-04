<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\AncientGreekMusicalNotation;

class AncientGreekMusicalNotationTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new AncientGreekMusicalNotation;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Ancient Greek Musical Notation', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1D200', $range[0]);
		$this->assertEquals('1D24F', $range[1]);
	}
}

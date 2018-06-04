<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\CombiningHalfMarks;

class CombiningHalfMarksTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CombiningHalfMarks;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Combining Half Marks', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('FE20', $range[0]);
		$this->assertEquals('FE2F', $range[1]);
	}
}

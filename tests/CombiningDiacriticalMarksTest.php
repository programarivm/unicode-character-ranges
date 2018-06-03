<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\CombiningDiacriticalMarks;

class CombiningDiacriticalMarksTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CombiningDiacriticalMarks;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Combining Diacritical Marks', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0300', $range['hex'][0]);
		$this->assertEquals('036F', $range['hex'][1]);
		$this->assertEquals(768, $range['dec'][0]);
		$this->assertEquals(879, $range['dec'][1]);
	}
}

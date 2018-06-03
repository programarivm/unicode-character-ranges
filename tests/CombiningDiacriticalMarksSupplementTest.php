<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\CombiningDiacriticalMarksSupplement;

class CombiningDiacriticalMarksSupplementTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CombiningDiacriticalMarksSupplement;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Combining Diacritical Marks Supplement', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1DC0', $range['hex'][0]);
		$this->assertEquals('1DFF', $range['hex'][1]);
		$this->assertEquals(7616, $range['dec'][0]);
		$this->assertEquals(7679, $range['dec'][1]);
	}
}

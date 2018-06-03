<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\CombiningDiacriticalMarksExtended;

class CombiningDiacriticalMarksExtendedTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CombiningDiacriticalMarksExtended;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Combining Diacritical Marks Extended', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1AB0', $range['hex'][0]);
		$this->assertEquals('1AFF', $range['hex'][1]);
		$this->assertEquals(6832, $range['dec'][0]);
		$this->assertEquals(6911, $range['dec'][1]);
	}
}

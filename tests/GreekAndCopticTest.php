<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\GreekAndCoptic;

class GreekAndCopticTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new GreekAndCoptic;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Greek and Coptic', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0370', $range['hex'][0]);
		$this->assertEquals('03FF', $range['hex'][1]);
		$this->assertEquals(880, $range['dec'][0]);
		$this->assertEquals(1023, $range['dec'][1]);
	}
}

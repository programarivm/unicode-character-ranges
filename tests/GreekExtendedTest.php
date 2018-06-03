<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\GreekExtended;

class GreekExtendedTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new GreekExtended;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Greek Extended', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1F00', $range['hex'][0]);
		$this->assertEquals('1FFF', $range['hex'][1]);
		$this->assertEquals(7936, $range['dec'][0]);
		$this->assertEquals(8191, $range['dec'][1]);
	}
}

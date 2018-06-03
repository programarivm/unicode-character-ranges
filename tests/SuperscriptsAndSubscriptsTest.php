<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\SuperscriptsAndSubscripts;

class SuperscriptsAndSubscriptsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new SuperscriptsAndSubscripts;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Superscripts and Subscripts', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2070', $range['hex'][0]);
		$this->assertEquals('209F', $range['hex'][1]);
		$this->assertEquals(8304, $range['dec'][0]);
		$this->assertEquals(8351, $range['dec'][1]);
	}
}

<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Gurmukhi;

class GurmukhiTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Gurmukhi;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Gurmukhi', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0A00', $range['hex'][0]);
		$this->assertEquals('0A7F', $range['hex'][1]);
		$this->assertEquals(2560, $range['dec'][0]);
		$this->assertEquals(2687, $range['dec'][1]);
	}
}

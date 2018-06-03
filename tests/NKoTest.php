<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\NKo;

class NKoTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new NKo;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('NKo', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('07C0', $range['hex'][0]);
		$this->assertEquals('07FF', $range['hex'][1]);
		$this->assertEquals(1984, $range['dec'][0]);
		$this->assertEquals(2047, $range['dec'][1]);
	}
}

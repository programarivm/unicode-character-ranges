<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Bengali;

class BengaliTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Bengali;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Bengali', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0980', $range['hex'][0]);
		$this->assertEquals('09FF', $range['hex'][1]);
		$this->assertEquals(2432, $range['dec'][0]);
		$this->assertEquals(2559, $range['dec'][1]);
	}
}

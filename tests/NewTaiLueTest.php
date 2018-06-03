<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\NewTaiLue;

class NewTaiLueTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new NewTaiLue;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('New Tai Lue', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1980', $range['hex'][0]);
		$this->assertEquals('19DF', $range['hex'][1]);
		$this->assertEquals(6528, $range['dec'][0]);
		$this->assertEquals(6623, $range['dec'][1]);
	}
}

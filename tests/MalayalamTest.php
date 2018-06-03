<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Malayalam;

class MalayalamTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Malayalam;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Malayalam', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0D00', $range['hex'][0]);
		$this->assertEquals('0D7F', $range['hex'][1]);
		$this->assertEquals(3328, $range['dec'][0]);
		$this->assertEquals(3455, $range['dec'][1]);
	}
}

<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Runic;

class RunicTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Runic;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Runic', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('16A0', $range['hex'][0]);
		$this->assertEquals('16FF', $range['hex'][1]);
		$this->assertEquals(5792, $range['dec'][0]);
		$this->assertEquals(5887, $range['dec'][1]);
	}
}

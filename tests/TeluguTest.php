<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Telugu;

class TeluguTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Telugu;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Telugu', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0C00', $range['hex'][0]);
		$this->assertEquals('0C7F', $range['hex'][1]);
		$this->assertEquals(3072, $range['dec'][0]);
		$this->assertEquals(3199, $range['dec'][1]);
	}
}

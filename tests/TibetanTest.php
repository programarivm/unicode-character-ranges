<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Tibetan;

class TibetanTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Tibetan;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Tibetan', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0F00', $range['hex'][0]);
		$this->assertEquals('0FFF', $range['hex'][1]);
		$this->assertEquals(3840, $range['dec'][0]);
		$this->assertEquals(4095, $range['dec'][1]);
	}
}

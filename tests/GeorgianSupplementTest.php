<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\GeorgianSupplement;

class GeorgianSupplementTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new GeorgianSupplement;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Georgian Supplement', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2D00', $range['hex'][0]);
		$this->assertEquals('2D2F', $range['hex'][1]);
		$this->assertEquals(11520, $range['dec'][0]);
		$this->assertEquals(11567, $range['dec'][1]);
	}
}

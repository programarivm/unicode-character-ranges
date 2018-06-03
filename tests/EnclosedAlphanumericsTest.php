<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\EnclosedAlphanumerics;

class EnclosedAlphanumericsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new EnclosedAlphanumerics;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Enclosed Alphanumerics', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2460', $range['hex'][0]);
		$this->assertEquals('24FF', $range['hex'][1]);
		$this->assertEquals(9312, $range['dec'][0]);
		$this->assertEquals(9471, $range['dec'][1]);
	}
}

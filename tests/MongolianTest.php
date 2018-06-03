<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Mongolian;

class MongolianTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Mongolian;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Mongolian', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1800', $range['hex'][0]);
		$this->assertEquals('18AF', $range['hex'][1]);
		$this->assertEquals(6144, $range['dec'][0]);
		$this->assertEquals(6319, $range['dec'][1]);
	}
}

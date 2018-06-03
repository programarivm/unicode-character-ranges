<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Buhid;

class BuhidTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Buhid;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Buhid', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1740', $range['hex'][0]);
		$this->assertEquals('175F', $range['hex'][1]);
		$this->assertEquals(5952, $range['dec'][0]);
		$this->assertEquals(5983, $range['dec'][1]);
	}
}

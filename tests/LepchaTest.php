<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Lepcha;

class LepchaTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Lepcha;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Lepcha', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1C00', $range['hex'][0]);
		$this->assertEquals('1C4F', $range['hex'][1]);
		$this->assertEquals(7168, $range['dec'][0]);
		$this->assertEquals(7247, $range['dec'][1]);
	}
}

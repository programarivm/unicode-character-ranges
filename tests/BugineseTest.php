<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Buginese;

class BugineseTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Buginese;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Buginese', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1A00', $range['hex'][0]);
		$this->assertEquals('1A1F', $range['hex'][1]);
		$this->assertEquals(6656, $range['dec'][0]);
		$this->assertEquals(6687, $range['dec'][1]);
	}
}

<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Armenian;

class ArmenianTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Armenian;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Armenian', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0530', $range['hex'][0]);
		$this->assertEquals('058F', $range['hex'][1]);
		$this->assertEquals(1328, $range['dec'][0]);
		$this->assertEquals(1423, $range['dec'][1]);
	}
}

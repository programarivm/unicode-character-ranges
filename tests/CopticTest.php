<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Coptic;

class CopticTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Coptic;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Coptic', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2C80', $range['hex'][0]);
		$this->assertEquals('2CFF', $range['hex'][1]);
		$this->assertEquals(11392, $range['dec'][0]);
		$this->assertEquals(11519, $range['dec'][1]);
	}
}

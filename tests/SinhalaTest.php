<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Sinhala;

class SinhalaTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Sinhala;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Sinhala', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0D80', $range['hex'][0]);
		$this->assertEquals('0DFF', $range['hex'][1]);
		$this->assertEquals(3456, $range['dec'][0]);
		$this->assertEquals(3583, $range['dec'][1]);
	}
}

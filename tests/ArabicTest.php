<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Arabic;

class ArabicTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Arabic;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Arabic', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0600', $range['hex'][0]);
		$this->assertEquals('06FF', $range['hex'][1]);
		$this->assertEquals(1536, $range['dec'][0]);
		$this->assertEquals(1791, $range['dec'][1]);
	}
}

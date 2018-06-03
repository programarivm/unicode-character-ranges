<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Limbu;

class LimbuTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Limbu;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Limbu', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1900', $range['hex'][0]);
		$this->assertEquals('194F', $range['hex'][1]);
		$this->assertEquals(6400, $range['dec'][0]);
		$this->assertEquals(6479, $range['dec'][1]);
	}
}

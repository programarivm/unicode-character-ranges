<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Samaritan;

class SamaritanTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Samaritan;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Samaritan', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0800', $range['hex'][0]);
		$this->assertEquals('083F', $range['hex'][1]);
		$this->assertEquals(2048, $range['dec'][0]);
		$this->assertEquals(2111, $range['dec'][1]);
	}
}

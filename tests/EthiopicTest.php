<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Ethiopic;

class EthiopicTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Ethiopic;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Ethiopic', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1200', $range['hex'][0]);
		$this->assertEquals('137F', $range['hex'][1]);
		$this->assertEquals(4608, $range['dec'][0]);
		$this->assertEquals(4991, $range['dec'][1]);
	}
}

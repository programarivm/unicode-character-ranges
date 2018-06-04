<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Batak;

class BatakTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Batak;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Batak', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1BC0', $range[0]);
		$this->assertEquals('1BFF', $range[1]);
	}
}

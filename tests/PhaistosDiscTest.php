<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\PhaistosDisc;

class PhaistosDiscTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new PhaistosDisc;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Phaistos Disc', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('101D0', $range[0]);
		$this->assertEquals('101FF', $range[1]);
	}
}

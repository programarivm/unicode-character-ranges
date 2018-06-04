<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\BopomofoExtended;

class BopomofoExtendedTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new BopomofoExtended;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Bopomofo Extended', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('31A0', $range[0]);
		$this->assertEquals('31BF', $range[1]);
	}
}

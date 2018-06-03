<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\EthiopicExtended;

class EthiopicExtendedTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new EthiopicExtended;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Ethiopic Extended', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2D80', $range[0]);
		$this->assertEquals('2DDF', $range[1]);
	}
}

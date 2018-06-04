<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\EthiopicExtendedA;

class EthiopicExtendedATest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new EthiopicExtendedA;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Ethiopic Extended-A', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('AB00', $range[0]);
		$this->assertEquals('AB2F', $range[1]);
	}
}

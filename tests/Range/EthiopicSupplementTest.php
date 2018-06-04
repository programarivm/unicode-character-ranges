<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\EthiopicSupplement;

class EthiopicSupplementTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new EthiopicSupplement;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Ethiopic Supplement', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1380', $range[0]);
		$this->assertEquals('139F', $range[1]);
	}
}

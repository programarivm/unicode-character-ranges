<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\PauCinHau;

class PauCinHauTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new PauCinHau;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Pau Cin Hau', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('11AC0', $range[0]);
		$this->assertEquals('11AFF', $range[1]);
	}
}

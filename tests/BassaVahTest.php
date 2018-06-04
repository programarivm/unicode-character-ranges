<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\BassaVah;

class BassaVahTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new BassaVah;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Bassa Vah', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('16AD0', $range[0]);
		$this->assertEquals('16AFF', $range[1]);
	}
}

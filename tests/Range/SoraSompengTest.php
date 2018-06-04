<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\SoraSompeng;

class SoraSompengTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new SoraSompeng;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Sora Sompeng', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('110D0', $range[0]);
		$this->assertEquals('110FF', $range[1]);
	}
}

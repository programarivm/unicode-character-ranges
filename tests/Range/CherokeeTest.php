<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Cherokee;

class CherokeeTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Cherokee;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Cherokee', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('13A0', $range[0]);
		$this->assertEquals('13FF', $range[1]);
	}
}

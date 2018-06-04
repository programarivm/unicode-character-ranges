<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\OldPersian;

class OldPersianTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new OldPersian;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Old Persian', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('103A0', $range[0]);
		$this->assertEquals('103DF', $range[1]);
	}
}

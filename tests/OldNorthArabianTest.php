<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\OldNorthArabian;

class OldNorthArabianTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new OldNorthArabian;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Old North Arabian', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('10A80', $range[0]);
		$this->assertEquals('10A9F', $range[1]);
	}
}

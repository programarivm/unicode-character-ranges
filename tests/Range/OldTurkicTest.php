<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\OldTurkic;

class OldTurkicTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new OldTurkic;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Old Turkic', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('10C00', $range[0]);
		$this->assertEquals('10C4F', $range[1]);
	}
}

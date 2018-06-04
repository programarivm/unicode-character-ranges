<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Siddham;

class SiddhamTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Siddham;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Siddham', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('11580', $range[0]);
		$this->assertEquals('115FF', $range[1]);
	}
}

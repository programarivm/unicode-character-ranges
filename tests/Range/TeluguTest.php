<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Telugu;

class TeluguTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Telugu;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Telugu', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0C00', $range[0]);
		$this->assertEquals('0C7F', $range[1]);
	}
}

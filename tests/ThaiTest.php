<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Thai;

class ThaiTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Thai;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Thai', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0E00', $range[0]);
		$this->assertEquals('0E7F', $range[1]);
	}
}

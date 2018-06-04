<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Arrows;

class ArrowsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Arrows;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Arrows', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2190', $range[0]);
		$this->assertEquals('21FF', $range[1]);
	}
}

<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\MeroiticCursive;

class MeroiticCursiveTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new MeroiticCursive;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Meroitic Cursive', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('109A0', $range[0]);
		$this->assertEquals('109FF', $range[1]);
	}
}

<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Cyrillic;

class CyrillicTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Cyrillic;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Cyrillic', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0400', $range[0]);
		$this->assertEquals('04FF', $range[1]);
	}
}

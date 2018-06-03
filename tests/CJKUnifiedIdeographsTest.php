<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\CJKUnifiedIdeographs;

class CJKUnifiedIdeographsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CJKUnifiedIdeographs;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('CJK Unified Ideographs', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('4E00', $range[0]);
		$this->assertEquals('9FFF', $range[1]);
	}
}

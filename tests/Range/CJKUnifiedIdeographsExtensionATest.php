<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\CJKUnifiedIdeographsExtensionA;

class CJKUnifiedIdeographsExtensionATest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CJKUnifiedIdeographsExtensionA;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('CJK Unified Ideographs Extension A', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('3400', $range[0]);
		$this->assertEquals('4DBF', $range[1]);
	}
}

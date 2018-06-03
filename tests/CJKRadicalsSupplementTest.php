<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\CJKRadicalsSupplement;

class CJKRadicalsSupplementTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CJKRadicalsSupplement;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('CJK Radicals Supplement', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2E80', $range[0]);
		$this->assertEquals('2EFF', $range[1]);
	}
}

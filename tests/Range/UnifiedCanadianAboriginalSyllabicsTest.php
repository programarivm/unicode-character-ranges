<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\UnifiedCanadianAboriginalSyllabics;

class UnifiedCanadianAboriginalSyllabicsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new UnifiedCanadianAboriginalSyllabics;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Unified Canadian Aboriginal Syllabics', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1400', $range[0]);
		$this->assertEquals('167F', $range[1]);
	}
}

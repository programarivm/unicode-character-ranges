<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\UnifiedCanadianAboriginalSyllabics;

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
		$this->assertEquals('Unified Canadian Aboriginal Syllabics', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1400', $range[0]);
		$this->assertEquals('167F', $range[1]);
	}
}

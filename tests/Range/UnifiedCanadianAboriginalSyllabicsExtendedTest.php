<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\UnifiedCanadianAboriginalSyllabicsExtended;

class UnifiedCanadianAboriginalSyllabicsExtendedTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new UnifiedCanadianAboriginalSyllabicsExtended;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Unified Canadian Aboriginal Syllabics Extended', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('18B0', $range[0]);
		$this->assertEquals('18FF', $range[1]);
	}
}

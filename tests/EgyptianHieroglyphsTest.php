<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\EgyptianHieroglyphs;

class EgyptianHieroglyphsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new EgyptianHieroglyphs;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Egyptian Hieroglyphs', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('13000', $range[0]);
		$this->assertEquals('1342F', $range[1]);
	}
}

<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\AegeanNumbers;

class AegeanNumbersTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new AegeanNumbers;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Aegean Numbers', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('10100', $range[0]);
		$this->assertEquals('1013F', $range[1]);
	}
}

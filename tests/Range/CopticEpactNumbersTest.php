<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\CopticEpactNumbers;

class CopticEpactNumbersTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CopticEpactNumbers;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Coptic Epact Numbers', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('102E0', $range[0]);
		$this->assertEquals('102FF', $range[1]);
	}
}

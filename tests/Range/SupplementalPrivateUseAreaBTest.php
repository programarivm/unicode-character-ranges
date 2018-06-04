<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\SupplementalPrivateUseAreaB;

class SupplementalPrivateUseAreaBTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new SupplementalPrivateUseAreaB;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Supplemental Private Use Area-B', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('100000', $range[0]);
		$this->assertEquals('10FFFD', $range[1]);
	}
}

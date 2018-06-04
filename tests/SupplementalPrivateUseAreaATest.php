<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\SupplementalPrivateUseAreaA;

class SupplementalPrivateUseAreaATest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new SupplementalPrivateUseAreaA;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Supplemental Private Use Area-A', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('F0000', $range[0]);
		$this->assertEquals('FFFFD', $range[1]);
	}
}

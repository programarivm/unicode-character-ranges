<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\SupplementalPrivateUseAreaA;

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
		$this->assertEquals('Supplemental Private Use Area-A', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('F0000', $range[0]);
		$this->assertEquals('FFFFD', $range[1]);
	}
}

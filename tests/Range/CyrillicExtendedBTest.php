<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\CyrillicExtendedB;

class CyrillicExtendedBTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CyrillicExtendedB;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Cyrillic Extended-B', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('A640', $range[0]);
		$this->assertEquals('A69F', $range[1]);
	}
}

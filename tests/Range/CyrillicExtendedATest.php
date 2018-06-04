<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\CyrillicExtendedA;

class CyrillicExtendedATest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CyrillicExtendedA;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Cyrillic Extended-A', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('2DE0', $range[0]);
		$this->assertEquals('2DFF', $range[1]);
	}
}

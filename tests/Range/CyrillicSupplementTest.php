<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\CyrillicSupplement;

class CyrillicSupplementTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CyrillicSupplement;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Cyrillic Supplement', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('0500', $range[0]);
		$this->assertEquals('052F', $range[1]);
	}
}

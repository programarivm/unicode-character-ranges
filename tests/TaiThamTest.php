<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\TaiTham;

class TaiThamTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new TaiTham;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Tai Tham', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1A20', $range[0]);
		$this->assertEquals('1AAF', $range[1]);
	}
}

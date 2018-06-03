<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\TaiViet;

class TaiVietTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new TaiViet;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Tai Viet', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('AA80', $range[0]);
		$this->assertEquals('AADF', $range[1]);
	}
}

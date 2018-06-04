<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\KanaSupplement;

class KanaSupplementTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new KanaSupplement;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Kana Supplement', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1B000', $range[0]);
		$this->assertEquals('1B0FF', $range[1]);
	}
}

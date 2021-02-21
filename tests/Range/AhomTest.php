<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Ahom;

class AhomTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Ahom;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Ahom', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('11700', $range[0]);
		$this->assertEquals('1173F', $range[1]);
	}

	/**
	 * @test
	 */
	public function get_keywords()
	{
		$keywords = $this->charRange->keywords();

		$expected = [
			'ahom',
			'assam',
			'india',
			'himalaya',
			'dead',
		];

		$this->assertEquals([], array_diff($expected, $keywords));
	}
}

<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Armenian;

class ArmenianTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Armenian;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Armenian', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('0530', $range[0]);
		$this->assertEquals('058F', $range[1]);
	}

	/**
	 * @test
	 */
	public function get_keywords()
	{
		$keywords = $this->charRange->keywords();

		$expected = [
			'ligature',
            'east',
            'west',
            'reform',
		];

		$this->assertTrue($expected == $keywords);
	}
}

<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Balinese;

class BalineseTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Balinese;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Balinese', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1B00', $range[0]);
		$this->assertEquals('1B7F', $range[1]);
	}

	/**
	 * @test
	 */
	public function get_keywords()
	{
		$keywords = $this->charRange->keywords();

		$expected = [
			'indonesia',
		];

		$this->assertTrue($expected == $keywords);
	}
}

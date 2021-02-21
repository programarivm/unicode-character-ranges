<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\AegeanNumbers;

class AegeanNumbersTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new AegeanNumbers;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Aegean Numbers', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('10100', $range[0]);
		$this->assertEquals('1013F', $range[1]);
	}

	/**
	 * @test
	 */
	public function get_keywords()
	{
		$keywords = $this->charRange->keywords();

		$expected = [
			'ancient',
			'minoan',
			'mycenaean',
			'greek',
			'dead',
		];

		$this->assertTrue($expected == $keywords);
	}
}

<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Arabic;

class ArabicTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Arabic;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Arabic', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('0600', $range[0]);
		$this->assertEquals('06FF', $range[1]);
	}

	/**
	 * @test
	 */
	public function get_keywords()
	{
		$keywords = $this->charRange->keywords();

		$expected = [
			'indic',
            'hindu',
            'digit',
		];

		$this->assertTrue($expected == $keywords);
	}
}

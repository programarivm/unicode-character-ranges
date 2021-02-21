<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\ArabicSupplement;

class ArabicSupplementTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new ArabicSupplement;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Arabic Supplement', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('0750', $range[0]);
		$this->assertEquals('077F', $range[1]);
	}

	/**
	 * @test
	 */
	public function get_keywords()
	{
		$keywords = $this->charRange->keywords();

		$expected = [
			'variant',
            'non',
            'pakistan',
            'africa',
            'persia',
            'old',
		];

		$this->assertTrue($expected == $keywords);
	}
}

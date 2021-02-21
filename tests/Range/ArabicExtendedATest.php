<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\ArabicExtendedA;

class ArabicExtendedATest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new ArabicExtendedA;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Arabic Extended-A', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('08A0', $range[0]);
		$this->assertEquals('08FF', $range[1]);
	}

	/**
	 * @test
	 */
	public function get_keywords()
	{
		$keywords = $this->charRange->keywords();

		$expected = [
			'arabic',
            'extended',
            'quran',
            'koran',
		];

		$this->assertTrue($expected == $keywords);
	}
}

<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\ArabicPresentationFormsA;

class ArabicPresentationFormsATest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new ArabicPresentationFormsA;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Arabic Presentation Forms-A', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('FB50', $range[0]);
		$this->assertEquals('FDFF', $range[1]);
	}

	/**
	 * @test
	 */
	public function get_keywords()
	{
		$keywords = $this->charRange->keywords();

		$expected = [
			'ligature',
            'persian',
            'urdu',
            'sindhi',
            'central',
            'asia',
		];

		$this->assertTrue($expected == $keywords);
	}
}

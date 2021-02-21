<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Avestan;

class AvestanTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Avestan;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Avestan', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('10B00', $range[0]);
		$this->assertEquals('10B3F', $range[1]);
	}

	/**
	 * @test
	 */
	public function get_keywords()
	{
		$keywords = $this->charRange->keywords();

		$expected = [
			'zoroastrian',
			'zarathustra',
			'religion',
			'persia',
			'pazand',
		];

		$this->assertTrue($expected == $keywords);
	}
}

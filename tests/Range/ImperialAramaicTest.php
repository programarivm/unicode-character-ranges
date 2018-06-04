<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\ImperialAramaic;

class ImperialAramaicTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new ImperialAramaic;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Imperial Aramaic', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('10840', $range[0]);
		$this->assertEquals('1085F', $range[1]);
	}
}

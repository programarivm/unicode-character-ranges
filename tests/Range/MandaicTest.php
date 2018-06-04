<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Mandaic;

class MandaicTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Mandaic;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Mandaic', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('0840', $range[0]);
		$this->assertEquals('085F', $range[1]);
	}
}

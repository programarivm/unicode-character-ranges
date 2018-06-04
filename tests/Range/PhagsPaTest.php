<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\PhagsPa;

class PhagsPaTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new PhagsPa;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Phags-pa', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('A840', $range[0]);
		$this->assertEquals('A87F', $range[1]);
	}
}

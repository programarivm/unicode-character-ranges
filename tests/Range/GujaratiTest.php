<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Gujarati;

class GujaratiTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Gujarati;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Gujarati', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('0A80', $range[0]);
		$this->assertEquals('0AFF', $range[1]);
	}
}

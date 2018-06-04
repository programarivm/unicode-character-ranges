<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Katakana;

class KatakanaTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Katakana;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Katakana', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('30A0', $range[0]);
		$this->assertEquals('30FF', $range[1]);
	}
}

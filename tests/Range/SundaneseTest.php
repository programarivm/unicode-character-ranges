<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Sundanese;

class SundaneseTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Sundanese;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Sundanese', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1B80', $range[0]);
		$this->assertEquals('1BBF', $range[1]);
	}
}

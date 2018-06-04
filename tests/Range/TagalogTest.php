<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Tagalog;

class TagalogTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Tagalog;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Tagalog', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1700', $range[0]);
		$this->assertEquals('171F', $range[1]);
	}
}

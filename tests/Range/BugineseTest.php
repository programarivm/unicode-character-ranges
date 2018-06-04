<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Buginese;

class BugineseTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Buginese;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Buginese', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1A00', $range[0]);
		$this->assertEquals('1A1F', $range[1]);
	}
}

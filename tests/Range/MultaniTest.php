<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Multani;

class MultaniTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Multani;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Multani', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('11280', $range[0]);
		$this->assertEquals('112AF', $range[1]);
	}
}

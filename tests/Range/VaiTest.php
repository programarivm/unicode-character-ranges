<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Vai;

class VaiTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Vai;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Vai', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('A500', $range[0]);
		$this->assertEquals('A63F', $range[1]);
	}
}

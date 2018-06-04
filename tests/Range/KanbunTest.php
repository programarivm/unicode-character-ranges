<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Kanbun;

class KanbunTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Kanbun;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Kanbun', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('3190', $range[0]);
		$this->assertEquals('319F', $range[1]);
	}
}

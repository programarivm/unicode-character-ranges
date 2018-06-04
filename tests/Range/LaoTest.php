<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Lao;

class LaoTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Lao;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Lao', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('0E80', $range[0]);
		$this->assertEquals('0EFF', $range[1]);
	}
}

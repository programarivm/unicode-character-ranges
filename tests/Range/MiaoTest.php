<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Miao;

class MiaoTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Miao;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Miao', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('16F00', $range[0]);
		$this->assertEquals('16F9F', $range[1]);
	}
}

<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Nabataean;

class NabataeanTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Nabataean;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Nabataean', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('10880', $range[0]);
		$this->assertEquals('108AF', $range[1]);
	}
}

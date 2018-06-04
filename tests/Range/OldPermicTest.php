<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\OldPermic;

class OldPermicTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new OldPermic;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Old Permic', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('10350', $range[0]);
		$this->assertEquals('1037F', $range[1]);
	}
}

<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Coptic;

class CopticTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Coptic;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Coptic', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('2C80', $range[0]);
		$this->assertEquals('2CFF', $range[1]);
	}
}

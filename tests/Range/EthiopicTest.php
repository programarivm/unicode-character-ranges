<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Ethiopic;

class EthiopicTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Ethiopic;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Ethiopic', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1200', $range[0]);
		$this->assertEquals('137F', $range[1]);
	}
}

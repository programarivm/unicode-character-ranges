<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Javanese;

class JavaneseTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Javanese;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Javanese', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('A980', $range[0]);
		$this->assertEquals('A9DF', $range[1]);
	}
}

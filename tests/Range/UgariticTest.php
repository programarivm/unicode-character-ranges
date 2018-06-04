<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Ugaritic;

class UgariticTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Ugaritic;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Ugaritic', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('10380', $range[0]);
		$this->assertEquals('1039F', $range[1]);
	}
}

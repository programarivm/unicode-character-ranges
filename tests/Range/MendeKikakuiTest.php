<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\MendeKikakui;

class MendeKikakuiTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new MendeKikakui;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Mende Kikakui', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1E800', $range[0]);
		$this->assertEquals('1E8DF', $range[1]);
	}
}

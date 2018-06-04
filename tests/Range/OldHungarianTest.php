<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\OldHungarian;

class OldHungarianTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new OldHungarian;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Old Hungarian', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('10C80', $range[0]);
		$this->assertEquals('10CFF', $range[1]);
	}
}

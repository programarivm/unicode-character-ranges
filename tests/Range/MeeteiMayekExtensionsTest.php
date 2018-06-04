<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\MeeteiMayekExtensions;

class MeeteiMayekExtensionsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new MeeteiMayekExtensions;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Meetei Mayek Extensions', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('AAE0', $range[0]);
		$this->assertEquals('AAFF', $range[1]);
	}
}

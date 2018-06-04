<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Tagbanwa;

class TagbanwaTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Tagbanwa;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Tagbanwa', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1760', $range[0]);
		$this->assertEquals('177F', $range[1]);
	}
}

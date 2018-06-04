<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\VedicExtensions;

class VedicExtensionsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new VedicExtensions;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Vedic Extensions', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1CD0', $range[0]);
		$this->assertEquals('1CFF', $range[1]);
	}
}

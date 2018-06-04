<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\SinhalaArchaicNumbers;

class SinhalaArchaicNumbersTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new SinhalaArchaicNumbers;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Sinhala Archaic Numbers', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('111E0', $range[0]);
		$this->assertEquals('111FF', $range[1]);
	}
}

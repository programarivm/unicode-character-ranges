<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Kharoshthi;

class KharoshthiTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Kharoshthi;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Kharoshthi', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('10A00', $range[0]);
		$this->assertEquals('10A5F', $range[1]);
	}
}

<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Samaritan;

class SamaritanTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Samaritan;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Samaritan', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('0800', $range[0]);
		$this->assertEquals('083F', $range[1]);
	}
}

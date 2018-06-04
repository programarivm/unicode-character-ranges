<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Mahajani;

class MahajaniTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Mahajani;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Mahajani', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('11150', $range[0]);
		$this->assertEquals('1117F', $range[1]);
	}
}

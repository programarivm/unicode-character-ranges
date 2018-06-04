<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Mro;

class MroTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Mro;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Mro', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('16A40', $range[0]);
		$this->assertEquals('16A6F', $range[1]);
	}
}

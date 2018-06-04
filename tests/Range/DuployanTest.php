<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Duployan;

class DuployanTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Duployan;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Duployan', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1BC00', $range[0]);
		$this->assertEquals('1BC9F', $range[1]);
	}
}

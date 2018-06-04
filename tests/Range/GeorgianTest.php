<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Georgian;

class GeorgianTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Georgian;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Georgian', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('10A0', $range[0]);
		$this->assertEquals('10FF', $range[1]);
	}
}

<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\GeorgianSupplement;

class GeorgianSupplementTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new GeorgianSupplement;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Georgian Supplement', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2D00', $range[0]);
		$this->assertEquals('2D2F', $range[1]);
	}
}

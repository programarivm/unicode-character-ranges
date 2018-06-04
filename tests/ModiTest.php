<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Modi;

class ModiTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Modi;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Modi', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('11600', $range[0]);
		$this->assertEquals('1165F', $range[1]);
	}
}

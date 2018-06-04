<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Phoenician;

class PhoenicianTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Phoenician;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Phoenician', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('10900', $range[0]);
		$this->assertEquals('1091F', $range[1]);
	}
}

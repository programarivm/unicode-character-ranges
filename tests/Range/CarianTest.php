<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Carian;

class CarianTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Carian;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Carian', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('102A0', $range[0]);
		$this->assertEquals('102DF', $range[1]);
	}
}

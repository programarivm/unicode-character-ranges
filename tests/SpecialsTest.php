<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Specials;

class SpecialsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Specials;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Specials', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('FFF0', $range[0]);
		$this->assertEquals('FFFF', $range[1]);
	}
}

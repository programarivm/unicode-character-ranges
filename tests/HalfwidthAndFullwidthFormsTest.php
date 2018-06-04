<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\HalfwidthAndFullwidthForms;

class HalfwidthAndFullwidthFormsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new HalfwidthAndFullwidthForms;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Halfwidth and Fullwidth Forms', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('FF00', $range[0]);
		$this->assertEquals('FFEF', $range[1]);
	}
}

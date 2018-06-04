<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\SpacingModifierLetters;

class SpacingModifierLettersTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new SpacingModifierLetters;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Spacing Modifier Letters', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('02B0', $range[0]);
		$this->assertEquals('02FF', $range[1]);
	}
}

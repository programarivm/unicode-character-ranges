<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\SpacingModifierLetters;

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
		$this->assertEquals('Spacing Modifier Letters', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('02B0', $range[0]);
		$this->assertEquals('02FF', $range[1]);
	}
}

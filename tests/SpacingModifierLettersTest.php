<?php

namespace UnicodeCharacterRanges\Tests;

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

		$this->assertEquals('02B0', $range['hex'][0]);
		$this->assertEquals('02FF', $range['hex'][1]);
		$this->assertEquals(688, $range['dec'][0]);
		$this->assertEquals(767, $range['dec'][1]);
	}
}

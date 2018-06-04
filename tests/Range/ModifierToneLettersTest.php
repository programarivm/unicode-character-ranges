<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\ModifierToneLetters;

class ModifierToneLettersTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new ModifierToneLetters;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Modifier Tone Letters', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('A700', $range[0]);
		$this->assertEquals('A71F', $range[1]);
	}
}

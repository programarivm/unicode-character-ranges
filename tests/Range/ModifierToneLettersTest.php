<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\ModifierToneLetters;

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
		$this->assertEquals('Modifier Tone Letters', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('A700', $range[0]);
		$this->assertEquals('A71F', $range[1]);
	}
}

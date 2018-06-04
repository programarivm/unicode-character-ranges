<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\OpticalCharacterRecognition;

class OpticalCharacterRecognitionTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new OpticalCharacterRecognition;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Optical Character Recognition', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2440', $range[0]);
		$this->assertEquals('245F', $range[1]);
	}
}

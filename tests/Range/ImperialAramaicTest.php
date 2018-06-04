<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\ImperialAramaic;

class ImperialAramaicTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new ImperialAramaic;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Imperial Aramaic', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('10840', $range[0]);
		$this->assertEquals('1085F', $range[1]);
	}
}

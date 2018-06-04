<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\PlayingCards;

class PlayingCardsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new PlayingCards;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Playing Cards', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1F0A0', $range[0]);
		$this->assertEquals('1F0FF', $range[1]);
	}
}

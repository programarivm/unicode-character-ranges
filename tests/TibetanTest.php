<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Tibetan;

class TibetanTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Tibetan;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Tibetan', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0F00', $range[0]);
		$this->assertEquals('0FFF', $range[1]);
	}
}

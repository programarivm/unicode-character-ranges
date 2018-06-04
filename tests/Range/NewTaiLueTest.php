<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\NewTaiLue;

class NewTaiLueTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new NewTaiLue;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('New Tai Lue', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1980', $range[0]);
		$this->assertEquals('19DF', $range[1]);
	}
}

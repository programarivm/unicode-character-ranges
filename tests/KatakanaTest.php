<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Katakana;

class KatakanaTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Katakana;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Katakana', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('30A0', $range[0]);
		$this->assertEquals('30FF', $range[1]);
	}
}

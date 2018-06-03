<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Hiragana;

class HiraganaTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Hiragana;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Hiragana', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('3040', $range[0]);
		$this->assertEquals('309F', $range[1]);
	}
}

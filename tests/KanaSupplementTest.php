<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\KanaSupplement;

class KanaSupplementTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new KanaSupplement;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Kana Supplement', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1B000', $range[0]);
		$this->assertEquals('1B0FF', $range[1]);
	}
}

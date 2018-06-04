<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\IdeographicDescriptionCharacters;

class IdeographicDescriptionCharactersTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new IdeographicDescriptionCharacters;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Ideographic Description Characters', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('2FF0', $range[0]);
		$this->assertEquals('2FFF', $range[1]);
	}
}

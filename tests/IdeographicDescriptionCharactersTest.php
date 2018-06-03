<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\IdeographicDescriptionCharacters;

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
		$this->assertEquals('Ideographic Description Characters', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2FF0', $range[0]);
		$this->assertEquals('2FFF', $range[1]);
	}
}

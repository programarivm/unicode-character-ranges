<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\MiscellaneousTechnical;

class MiscellaneousTechnicalTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new MiscellaneousTechnical;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Miscellaneous Technical', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2300', $range[0]);
		$this->assertEquals('23FF', $range[1]);
	}
}

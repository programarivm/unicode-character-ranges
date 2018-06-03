<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Myanmar;

class MyanmarTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Myanmar;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Myanmar', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1000', $range[0]);
		$this->assertEquals('109F', $range[1]);
	}
}

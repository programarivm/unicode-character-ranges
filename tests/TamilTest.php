<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Tamil;

class TamilTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Tamil;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Tamil', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0B80', $range[0]);
		$this->assertEquals('0BFF', $range[1]);
	}
}

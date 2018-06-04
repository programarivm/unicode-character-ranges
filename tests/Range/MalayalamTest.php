<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Malayalam;

class MalayalamTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Malayalam;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Malayalam', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0D00', $range[0]);
		$this->assertEquals('0D7F', $range[1]);
	}
}

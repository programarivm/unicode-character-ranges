<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\ShorthandFormatControls;

class ShorthandFormatControlsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new ShorthandFormatControls;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Shorthand Format Controls', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1BCA0', $range[0]);
		$this->assertEquals('1BCAF', $range[1]);
	}
}

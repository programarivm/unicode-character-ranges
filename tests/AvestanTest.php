<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Avestan;

class AvestanTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Avestan;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Avestan', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('10B00', $range[0]);
		$this->assertEquals('10B3F', $range[1]);
	}
}

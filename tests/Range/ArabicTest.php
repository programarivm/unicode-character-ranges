<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Arabic;

class ArabicTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Arabic;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Arabic', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0600', $range[0]);
		$this->assertEquals('06FF', $range[1]);
	}
}

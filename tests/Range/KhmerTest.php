<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Khmer;

class KhmerTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Khmer;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Khmer', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1780', $range[0]);
		$this->assertEquals('17FF', $range[1]);
	}
}

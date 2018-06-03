<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Bamum;

class BamumTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Bamum;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Bamum', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('A6A0', $range[0]);
		$this->assertEquals('A6FF', $range[1]);
	}
}

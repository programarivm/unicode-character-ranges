<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Hatran;

class HatranTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Hatran;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Hatran', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('108E0', $range[0]);
		$this->assertEquals('108FF', $range[1]);
	}
}

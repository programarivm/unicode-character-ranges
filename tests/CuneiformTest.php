<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Cuneiform;

class CuneiformTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Cuneiform;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Cuneiform', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('12000', $range[0]);
		$this->assertEquals('123FF', $range[1]);
	}
}

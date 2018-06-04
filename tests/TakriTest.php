<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Takri;

class TakriTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Takri;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Takri', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('11680', $range[0]);
		$this->assertEquals('116CF', $range[1]);
	}
}

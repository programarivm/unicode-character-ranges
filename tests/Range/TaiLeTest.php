<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\TaiLe;

class TaiLeTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new TaiLe;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Tai Le', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1950', $range[0]);
		$this->assertEquals('197F', $range[1]);
	}
}

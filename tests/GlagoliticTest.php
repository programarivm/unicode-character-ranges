<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Glagolitic;

class GlagoliticTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Glagolitic;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Glagolitic', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2C00', $range[0]);
		$this->assertEquals('2C5F', $range[1]);
	}
}

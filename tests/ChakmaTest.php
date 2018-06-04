<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Chakma;

class ChakmaTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Chakma;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Chakma', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('11100', $range[0]);
		$this->assertEquals('1114F', $range[1]);
	}
}

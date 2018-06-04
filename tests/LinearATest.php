<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\LinearA;

class LinearATest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new LinearA;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Linear A', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('10600', $range[0]);
		$this->assertEquals('1077F', $range[1]);
	}
}

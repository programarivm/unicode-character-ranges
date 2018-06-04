<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Shavian;

class ShavianTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Shavian;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Shavian', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('10450', $range[0]);
		$this->assertEquals('1047F', $range[1]);
	}
}

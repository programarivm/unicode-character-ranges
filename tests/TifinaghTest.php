<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Tifinagh;

class TifinaghTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Tifinagh;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Tifinagh', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2D30', $range[0]);
		$this->assertEquals('2D7F', $range[1]);
	}
}

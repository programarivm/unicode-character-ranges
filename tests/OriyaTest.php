<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Oriya;

class OriyaTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Oriya;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Oriya', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0B00', $range[0]);
		$this->assertEquals('0B7F', $range[1]);
	}
}

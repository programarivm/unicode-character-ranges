<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Elbasan;

class ElbasanTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Elbasan;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Elbasan', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('10500', $range[0]);
		$this->assertEquals('1052F', $range[1]);
	}
}

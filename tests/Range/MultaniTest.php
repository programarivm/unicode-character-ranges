<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Multani;

class MultaniTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Multani;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Multani', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('11280', $range[0]);
		$this->assertEquals('112AF', $range[1]);
	}
}

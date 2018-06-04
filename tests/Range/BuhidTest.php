<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Buhid;

class BuhidTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Buhid;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Buhid', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1740', $range[0]);
		$this->assertEquals('175F', $range[1]);
	}
}

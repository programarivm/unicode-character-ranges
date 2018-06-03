<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Tagalog;

class TagalogTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Tagalog;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Tagalog', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1700', $range['hex'][0]);
		$this->assertEquals('171F', $range['hex'][1]);
		$this->assertEquals(5888, $range['dec'][0]);
		$this->assertEquals(5919, $range['dec'][1]);
	}
}

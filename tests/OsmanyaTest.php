<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Osmanya;

class OsmanyaTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Osmanya;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Osmanya', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('10480', $range[0]);
		$this->assertEquals('104AF', $range[1]);
	}
}

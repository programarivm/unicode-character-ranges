<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\DominoTiles;

class DominoTilesTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new DominoTiles;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Domino Tiles', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1F030', $range[0]);
		$this->assertEquals('1F09F', $range[1]);
	}
}

<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\MahjongTiles;

class MahjongTilesTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new MahjongTiles;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Mahjong Tiles', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1F000', $range[0]);
		$this->assertEquals('1F02F', $range[1]);
	}
}

<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\MahjongTiles;

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
		$this->assertEquals('Mahjong Tiles', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1F000', $range[0]);
		$this->assertEquals('1F02F', $range[1]);
	}
}

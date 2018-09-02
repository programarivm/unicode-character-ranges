<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class MahjongTiles extends RangeAbstract
{
	const RANGE_NAME = 'Mahjong Tiles';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1F000',
			'1F02F',
		];
	}
}

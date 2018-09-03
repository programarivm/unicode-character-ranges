<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class MahjongTiles extends AbstractRange
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

<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class DominoTiles extends AbstractRange
{
	const RANGE_NAME = 'Domino Tiles';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1F030',
			'1F09F',
		];
	}
}

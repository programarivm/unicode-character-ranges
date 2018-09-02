<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class PlayingCards extends RangeAbstract
{
	const RANGE_NAME = 'Playing Cards';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1F0A0',
			'1F0FF',
		];
	}
}

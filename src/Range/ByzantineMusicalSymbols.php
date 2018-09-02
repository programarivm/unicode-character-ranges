<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class ByzantineMusicalSymbols extends RangeAbstract
{
	const RANGE_NAME = 'Byzantine Musical Symbols';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1D000',
			'1D0FF',
		];
	}
}

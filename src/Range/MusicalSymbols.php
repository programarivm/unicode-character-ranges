<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class MusicalSymbols extends RangeAbstract
{
	const RANGE_NAME = 'Musical Symbols';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1D100',
			'1D1FF',
		];
	}
}

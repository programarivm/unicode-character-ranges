<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class MathematicalAlphanumericSymbols extends RangeAbstract
{
	const RANGE_NAME = 'Mathematical Alphanumeric Symbols';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1D400',
			'1D7FF',
		];
	}
}

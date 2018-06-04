<?php

namespace UnicodeRanges\Range;

class ArabicMathematicalAlphabeticSymbols extends RangeAbstract
{
	const RANGE_NAME = 'Arabic Mathematical Alphabetic Symbols';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1EE00',
			'1EEFF',
		];
	}
}

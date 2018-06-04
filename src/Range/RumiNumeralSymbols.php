<?php

namespace UnicodeCharacterRanges\Range;

class RumiNumeralSymbols extends RangeAbstract
{
	const RANGE_NAME = 'Rumi Numeral Symbols';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10E60',
			'10E7F',
		];
	}
}

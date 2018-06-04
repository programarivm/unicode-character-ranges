<?php

namespace UnicodeCharacterRanges\Range;

class SupplementalSymbolsAndPictographs extends RangeAbstract
{
	const RANGE_NAME = 'Supplemental Symbols and Pictographs';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1F900',
			'1F9FF',
		];
	}
}

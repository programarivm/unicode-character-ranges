<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class MiscellaneousSymbolsAndPictographs extends RangeAbstract
{
	const RANGE_NAME = 'Miscellaneous Symbols and Pictographs';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1F300',
			'1F5FF',
		];
	}
}

<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class CuneiformNumbersAndPunctuation extends RangeAbstract
{
	const RANGE_NAME = 'Cuneiform Numbers and Punctuation';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'12400',
			'1247F',
		];
	}
}

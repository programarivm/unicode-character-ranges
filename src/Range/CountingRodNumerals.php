<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class CountingRodNumerals extends RangeAbstract
{
	const RANGE_NAME = 'Counting Rod Numerals';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1D360',
			'1D37F',
		];
	}
}

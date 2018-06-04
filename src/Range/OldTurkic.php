<?php

namespace UnicodeRanges\Range;

class OldTurkic extends RangeAbstract
{
	const RANGE_NAME = 'Old Turkic';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10C00',
			'10C4F',
		];
	}
}

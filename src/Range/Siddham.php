<?php

namespace UnicodeRanges\Range;

class Siddham extends RangeAbstract
{
	const RANGE_NAME = 'Siddham';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'11580',
			'115FF',
		];
	}
}

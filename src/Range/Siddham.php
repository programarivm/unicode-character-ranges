<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

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

<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class EnclosedAlphanumericSupplement extends RangeAbstract
{
	const RANGE_NAME = 'Enclosed Alphanumeric Supplement';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1F100',
			'1F1FF',
		];
	}
}

<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Latin1Supplement extends RangeAbstract
{
	const RANGE_NAME = 'Latin-1 Supplement';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'0080',
			'00FF'
		];
	}
}

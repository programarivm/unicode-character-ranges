<?php

namespace UnicodeRanges\Range;

class Shavian extends RangeAbstract
{
	const RANGE_NAME = 'Shavian';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10450',
			'1047F',
		];
	}
}
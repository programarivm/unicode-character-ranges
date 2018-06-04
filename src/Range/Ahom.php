<?php

namespace UnicodeRanges\Range;

class Ahom extends RangeAbstract
{
	const RANGE_NAME = 'Ahom';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'11700',
			'1173F',
		];
	}
}

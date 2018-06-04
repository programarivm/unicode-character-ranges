<?php

namespace UnicodeRanges\Range;

class Grantha extends RangeAbstract
{
	const RANGE_NAME = 'Grantha';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'11300',
			'1137F',
		];
	}
}

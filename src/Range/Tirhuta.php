<?php

namespace UnicodeRanges\Range;

class Tirhuta extends RangeAbstract
{
	const RANGE_NAME = 'Tirhuta';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'11480',
			'114DF',
		];
	}
}

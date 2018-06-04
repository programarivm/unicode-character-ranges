<?php

namespace UnicodeRanges\Range;

class WarangCiti extends RangeAbstract
{
	const RANGE_NAME = 'Warang Citi';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'118A0',
			'118FF',
		];
	}
}

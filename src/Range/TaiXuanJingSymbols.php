<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class TaiXuanJingSymbols extends AbstractRange
{
	const RANGE_NAME = 'Tai Xuan Jing Symbols';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1D300',
			'1D35F',
		];
	}
}

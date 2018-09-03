<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Tirhuta extends AbstractRange
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

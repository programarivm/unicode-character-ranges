<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Khojki extends RangeAbstract
{
	const RANGE_NAME = 'Khojki';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'11200',
			'1124F',
		];
	}
}

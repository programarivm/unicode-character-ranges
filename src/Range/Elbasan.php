<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Elbasan extends AbstractRange
{
	const RANGE_NAME = 'Elbasan';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10500',
			'1052F',
		];
	}
}

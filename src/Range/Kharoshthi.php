<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Kharoshthi extends AbstractRange
{
	const RANGE_NAME = 'Kharoshthi';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10A00',
			'10A5F',
		];
	}
}

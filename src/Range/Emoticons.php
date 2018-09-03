<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Emoticons extends AbstractRange
{
	const RANGE_NAME = 'Emoticons';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1F600',
			'1F64F',
		];
	}
}

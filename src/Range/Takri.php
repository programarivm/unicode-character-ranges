<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Takri extends AbstractRange
{
	const RANGE_NAME = 'Takri';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'11680',
			'116CF',
		];
	}
}

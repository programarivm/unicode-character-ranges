<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class ImperialAramaic extends AbstractRange
{
	const RANGE_NAME = 'Imperial Aramaic';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10840',
			'1085F',
		];
	}
}

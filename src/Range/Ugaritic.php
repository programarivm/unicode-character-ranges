<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Ugaritic extends AbstractRange
{
	const RANGE_NAME = 'Ugaritic';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10380',
			'1039F',
		];
	}
}

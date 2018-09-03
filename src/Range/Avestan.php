<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Avestan extends AbstractRange
{
	const RANGE_NAME = 'Avestan';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10B00',
			'10B3F',
		];
	}
}

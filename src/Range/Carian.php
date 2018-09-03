<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Carian extends AbstractRange
{
	const RANGE_NAME = 'Carian';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'102A0',
			'102DF',
		];
	}
}

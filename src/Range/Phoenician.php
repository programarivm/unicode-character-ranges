<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Phoenician extends AbstractRange
{
	const RANGE_NAME = 'Phoenician';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10900',
			'1091F',
		];
	}
}

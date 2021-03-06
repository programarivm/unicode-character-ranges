<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class LatinExtendedB extends AbstractRange
{
	const RANGE_NAME = 'Latin Extended-B';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'0180',
			'024F'
		];
	}
}

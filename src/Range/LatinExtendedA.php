<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class LatinExtendedA extends AbstractRange
{
	const RANGE_NAME = 'Latin Extended-A';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'0100',
			'017F'
		];
	}
}

<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class SupplementalArrowsC extends AbstractRange
{
	const RANGE_NAME = 'Supplemental Arrows-C';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1F800',
			'1F8FF',
		];
	}
}

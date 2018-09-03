<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class OldNorthArabian extends AbstractRange
{
	const RANGE_NAME = 'Old North Arabian';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10A80',
			'10A9F',
		];
	}
}

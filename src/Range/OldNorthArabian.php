<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class OldNorthArabian extends RangeAbstract
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

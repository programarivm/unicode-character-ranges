<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class OldHungarian extends AbstractRange
{
	const RANGE_NAME = 'Old Hungarian';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10C80',
			'10CFF',
		];
	}
}

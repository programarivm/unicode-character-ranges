<?php

namespace UnicodeCharacterRanges\Range;

class OldSouthArabian extends RangeAbstract
{
	const RANGE_NAME = 'Old South Arabian';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10A60',
			'10A7F',
		];
	}
}

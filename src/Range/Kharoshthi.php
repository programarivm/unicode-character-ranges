<?php

namespace UnicodeCharacterRanges\Range;

class Kharoshthi extends RangeAbstract
{
	const RANGE_NAME = 'Kharoshthi';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10A00',
			'10A5F',
		];
	}
}

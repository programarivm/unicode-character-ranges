<?php

namespace UnicodeCharacterRanges\Range;

class Avestan extends RangeAbstract
{
	const RANGE_NAME = 'Avestan';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10B00',
			'10B3F',
		];
	}
}

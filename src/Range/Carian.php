<?php

namespace UnicodeCharacterRanges\Range;

class Carian extends RangeAbstract
{
	const RANGE_NAME = 'Carian';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'102A0',
			'102DF',
		];
	}
}

<?php

namespace UnicodeCharacterRanges\Range;

class Sharada extends RangeAbstract
{
	const RANGE_NAME = 'Sharada';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'11180',
			'111DF',
		];
	}
}

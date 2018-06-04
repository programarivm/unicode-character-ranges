<?php

namespace UnicodeCharacterRanges\Range;

class Kaithi extends RangeAbstract
{
	const RANGE_NAME = 'Kaithi';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'11080',
			'110CF',
		];
	}
}

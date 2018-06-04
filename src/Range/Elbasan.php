<?php

namespace UnicodeCharacterRanges\Range;

class Elbasan extends RangeAbstract
{
	const RANGE_NAME = 'Elbasan';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10500',
			'1052F',
		];
	}
}

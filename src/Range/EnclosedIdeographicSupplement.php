<?php

namespace UnicodeCharacterRanges\Range;

class EnclosedIdeographicSupplement extends RangeAbstract
{
	const RANGE_NAME = 'Enclosed Ideographic Supplement';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1F200',
			'1F2FF',
		];
	}
}

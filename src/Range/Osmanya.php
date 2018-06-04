<?php

namespace UnicodeCharacterRanges\Range;

class Osmanya extends RangeAbstract
{
	const RANGE_NAME = 'Osmanya';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10480',
			'104AF',
		];
	}
}

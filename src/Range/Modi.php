<?php

namespace UnicodeCharacterRanges\Range;

class Modi extends RangeAbstract
{
	const RANGE_NAME = 'Modi';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'11600',
			'1165F',
		];
	}
}

<?php

namespace UnicodeCharacterRanges;

class Siddham extends CharacterRange
{
	const RANGE_NAME = 'Siddham';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'11580',
			'115FF',
		];
	}
}

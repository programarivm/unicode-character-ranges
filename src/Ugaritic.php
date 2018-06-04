<?php

namespace UnicodeCharacterRanges;

class Ugaritic extends CharacterRange
{
	const RANGE_NAME = 'Ugaritic';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10380',
			'1039F',
		];
	}
}

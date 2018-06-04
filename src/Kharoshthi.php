<?php

namespace UnicodeCharacterRanges;

class Kharoshthi extends CharacterRange
{
	const RANGE_NAME = 'Kharoshthi';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10A00',
			'10A5F',
		];
	}
}

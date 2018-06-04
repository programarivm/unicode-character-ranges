<?php

namespace UnicodeCharacterRanges;

class Avestan extends CharacterRange
{
	const RANGE_NAME = 'Avestan';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10B00',
			'10B3F',
		];
	}
}

<?php

namespace UnicodeCharacterRanges;

class CaucasianAlbanian extends CharacterRange
{
	const RANGE_NAME = 'Caucasian Albanian';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10530',
			'1056F',
		];
	}
}

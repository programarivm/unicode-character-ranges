<?php

namespace UnicodeCharacterRanges;

class Elbasan extends CharacterRange
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

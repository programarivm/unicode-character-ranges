<?php

namespace UnicodeCharacterRanges;

class OldPermic extends CharacterRange
{
	const RANGE_NAME = 'Old Permic';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10350',
			'1037F',
		];
	}
}

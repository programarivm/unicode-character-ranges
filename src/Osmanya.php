<?php

namespace UnicodeCharacterRanges;

class Osmanya extends CharacterRange
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

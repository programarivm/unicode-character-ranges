<?php

namespace UnicodeCharacterRanges;

class Latin1Supplement extends CharacterRange
{
	const RANGE_NAME = 'Latin-1 Supplement';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'0080',
			'00FF'
		];
	}
}

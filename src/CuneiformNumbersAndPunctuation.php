<?php

namespace UnicodeCharacterRanges;

class CuneiformNumbersAndPunctuation extends CharacterRange
{
	const RANGE_NAME = 'Cuneiform Numbers and Punctuation';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'12400',
			'1247F',
		];
	}
}

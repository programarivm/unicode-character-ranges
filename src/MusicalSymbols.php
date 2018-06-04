<?php

namespace UnicodeCharacterRanges;

class MusicalSymbols extends CharacterRange
{
	const RANGE_NAME = 'Musical Symbols';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1D100',
			'1D1FF',
		];
	}
}

<?php

namespace UnicodeCharacterRanges;

class AncientSymbols extends CharacterRange
{
	const RANGE_NAME = 'Ancient Symbols';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10190',
			'101CF',
		];
	}
}

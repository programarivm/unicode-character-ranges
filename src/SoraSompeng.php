<?php

namespace UnicodeCharacterRanges;

class SoraSompeng extends CharacterRange
{
	const RANGE_NAME = 'Sora Sompeng';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'110D0',
			'110FF',
		];
	}
}

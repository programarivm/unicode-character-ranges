<?php

namespace UnicodeCharacterRanges;

class BassaVah extends CharacterRange
{
	const RANGE_NAME = 'Bassa Vah';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'16AD0',
			'16AFF',
		];
	}
}

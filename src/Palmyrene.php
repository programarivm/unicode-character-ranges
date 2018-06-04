<?php

namespace UnicodeCharacterRanges;

class Palmyrene extends CharacterRange
{
	const RANGE_NAME = 'Palmyrene';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10860',
			'1087F',
		];
	}
}

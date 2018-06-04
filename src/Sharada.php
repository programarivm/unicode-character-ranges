<?php

namespace UnicodeCharacterRanges;

class Sharada extends CharacterRange
{
	const RANGE_NAME = 'Sharada';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'11180',
			'111DF',
		];
	}
}
